#made for pocketvj exhibition
# still a few issues: 1. opens too many windows, 2.is very laggy
#run it like this:
#python3 gender.py --image_source=webcam --pygame_display=yes --opencv_display=yes --delay=1 --haar_path=/home/pvj/opencv/opencv-3.4.1/data/haarcascades/haarcascade_frontalface_alt.xml


import pygame
import pygame.camera
from pygame.locals import *

import time
import imutils
import cv2
import numpy as np
import argparse

# http://www.pygame.org/wiki/HeadlessNoWindowsNeeded
# https://stackoverflow.com/questions/10466590/hiding-pygame-display  (Chris Jeong's answer)
#import os
#os.environ["SDL_VIDEODRIVER"] = "dummy"

# allow the camera to warmup
time.sleep(0.1)

DEVICE   = '/dev/video0'
SIZE     = (640, 480)
FILENAME = 'capture.png'


MODEL_MEAN_VALUES = (78.4263377603, 87.7689143744, 114.895847746)
age_list          = ['(0, 2)','(4, 6)','(8, 12)','(15, 20)','(25, 32)','(38, 43)','(48, 53)','(60, 100)']
gender_list       = ['Male', 'Female']


def getargs():
    '''
    Get arguments. There is one argument: --imagesource which can be either 'nachiket' or 'webcam'
    '''
    parser = argparse.ArgumentParser(description='Argument parser for face recognition')
    parser.add_argument('--image_source',help='defines source of images for face recognition',
                        type=str,required=True,default='webcam',choices=['webcam','nachiket']
                       )
    parser.add_argument('--haar_path',help='defines absolute path of haarcascade_frontalface_alt.xml including filename',
                        type=str,required=False,default=None
                       )
    parser.add_argument('--pygame_display',help='turn on or off the pygame display',type=str,required=False,default='yes',
                        choices=['yes','no']
                       )

    parser.add_argument('--opencv_display',help='turn on or off the opencv display',type=str,required=False,default='yes',
                        choices=['yes','no']
                       )

    parser.add_argument('--delay',help='specify time delay between refreshing frames (millisecs)',required=False,default=1,type=int)
                        

    
    args = parser.parse_args()

    # process args
    if (args.haar_path == 'None'):
        args.haar_path = None

    assert (args.delay>0),'--delay should be integer > 0, you specified {}'.format(args.delay)
        
    return args

 
def initialize_caffe_model():
    # models come from 
    # https://itywik.org/2018/03/26/age-and-gender-detection-with-opencv-on-the-raspberry-pi/
    # http://itywik.org/download/128/
    print('Loading models...')
    age_net = cv2.dnn.readNetFromCaffe(
                        "age_gender_models/deploy_age.prototxt", 
                        "age_gender_models/age_net.caffemodel")
    gender_net = cv2.dnn.readNetFromCaffe(
                        "age_gender_models/deploy_gender.prototxt", 
                        "age_gender_models/gender_net.caffemodel")

    print('Models loaded...')
 
    return (age_net, gender_net)

def image_nachiket():
    '''
    A generator function which reads nachiket.jpg and yields it forever
    This generator is used for testing if the cv face-recognition actually works
    image is in bgr format because cv2 reads it in bgr format
    https://stackoverflow.com/questions/54959387/rgb-image-display-in-matplotlib-plt-imshow-returns-a-blue-image
    '''
    image = cv2.imread('nachiket.jpg',1)
    image = np.array(image)

    while True:
        yield image


def image_generator(device=DEVICE,size=SIZE,filename=FILENAME,pygame_display='yes'):
    '''
    A generator function which scans device and yields images
    '''
    
    # initialize pygame
    pygame.init()
    pygame.camera.init()
    display = pygame.display.set_mode(SIZE,0)
    pygame.mouse.set_visible(0)  # hide mouse
    camera = pygame.camera.Camera(DEVICE,SIZE)
    camera.start()
    screen = pygame.surface.Surface(SIZE,0,display)
    
    capture = True
    while capture:
        # gets RGB image - need to convert RGB to BGR for cv2
        # https://www.pygame.org/docs/ref/camera.html#pygame.camera.Camera.get_image        
        screen = camera.get_image(screen)
        if pygame_display == 'yes':
            # blit means to draw objects in the screen buffer to display        
            display.blit(screen,(0,0))
            # update the display 
            pygame.display.flip()
            
        # https://stackoverflow.com/questions/34673424/how-to-get-numpy-array-of-rgb-colors-from-pygame-surface
        s3d=pygame.surfarray.array3d(screen)
        # swap the first two axes
        s3d=np.swapaxes(s3d,0,1)  

        # IMPORTANT
        # convert rgb to bgr DO NOT use: s3d=s3d[:,:,::-1]
        # https://github.com/opencv/opencv/issues/18120#issuecomment-688190878
        # cv2.COLOR_RGB2BGR and COLOR_BGR2RGB both evaluate to 4
        s3d = cv2.cvtColor(s3d,cv2.COLOR_RGB2BGR)
        
        yield s3d

def capture_loop(age_net,gender_net,imgen,haar_path=None,opencv_display='no',delay=1):
    '''
    This is the capture loop.
    age_net, gender_net are dnns (created by initialize_caffe_model)
    imgen is a generator which produces images (bgr) to feed to age_net and gender_net
    '''
    print('Starting capture loop...')
    font = cv2.FONT_HERSHEY_SIMPLEX
    # https://stackoverflow.com/questions/30508922/error-215-empty-in-function-detectmultiscale        
    # face_cascade = cv2.CascadeClassifier('/home/pi/venv/magopencv/lib/python3.7/site-packages/cv2/data/haarcascade_frontalface_alt.xml')
    # face_cascade = cv2.CascadeClassifier('haarcascade_frontalface_alt.xml')
    # print('haar_path=',type(haar_path))
    if haar_path is None:
        face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades+'haarcascade_frontalface_alt.xml')
    else:
        face_cascade = cv2.CascadeClassifier(haar_path)
    
    for image in imgen:
        np.save('input_from_camera',image)
        gray  = cv2.cvtColor(image,cv2.COLOR_BGR2GRAY)
        faces = face_cascade.detectMultiScale(gray, 1.1, 5)
        print("Found ",len(faces)," face(s)")
        
        for (x,y,w,h) in faces:
            # https://github.com/opencv/opencv/issues/18120
            cv2.rectangle(image,(x,y),(x+w,y+h),(255,255,0),2)
            np.save('face_detected',image)
            face_img = image[y:y+h, x:x+w].copy()
            blob = cv2.dnn.blobFromImage(face_img,1,(227, 227), MODEL_MEAN_VALUES, swapRB=False)
            # Predict gender
            gender_net.setInput(blob)
            gender_preds = gender_net.forward()
            gender = gender_list[gender_preds[0].argmax()]
            # Predict age
            age_net.setInput(blob)
            age_preds = age_net.forward()
            age = age_list[age_preds[0].argmax()]
            overlay_text = "%s, %s" % (gender, age)
            cv2.putText(image, overlay_text ,(x,y), font, 0.6,(255,255,255),2,cv2.LINE_AA)
            print(gender, age)

        if (opencv_display == 'yes'): cv2.imshow("Image",image)
        key = cv2.waitKey(delay) 
        # if (opencv_display == 'yes'): cv2.destroyAllWindows()

if __name__ == '__main__':
    
    args    = getargs()
    gendict = {
               'webcam':image_generator(device=DEVICE,size=SIZE,filename=FILENAME,
                                        pygame_display=args.pygame_display
                                       ),
               'nachiket':image_nachiket()
              }
    imgen   = gendict[args.image_source]
    
    age_net,gender_net = initialize_caffe_model()     # initialize models, pygame
    #imgen  = image_generator(device=DEVICE,size=SIZE,filename=FILENAME) # streams usb camera
    #imnach = image_nachiket()  # this produces only a stream of nachiket.jpg
    capture_loop(age_net=age_net,gender_net=gender_net,
                 imgen=imgen,haar_path=args.haar_path,
                 opencv_display=args.opencv_display,
                 delay=args.delay
                )
    
        
    


