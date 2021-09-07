# -*- coding: utf-8 -*-

# this is in very early stage, help from anyone very welcome
# image folders are located in  /media/internal/grandPA/
# trying to solve the socket thing first, so I can bind anything like tcp, dmx, artnet from PocketVJ system to grandPA
# usage: run grandPA.py and in another terminal grandPA_client.py, e.g. grandPA_client.py -KEY_UP 1

import pygame
import sys
import time
import zmq
import threading

### INITIALIZE socket for external inputs to tcp://*:5555
context = zmq.Context()
# need something else than PULL?
socket = context.socket(zmq.PULL)
socket.bind("tcp://*:5555")
###


#SET VARIABLES
# x and y should always be the center in future, something like: pygame.display
x,y = 300,200 #would be nice to get half of pygame.FULLSCREEN / 2 ??
#y = 100
speed = 10
gobo1width = 80
gobo1height = 80
gobo1rotation = 45
alpha = 255


# INITIALIZE the GAME
pygame.init()

# set background
bg = pygame.image.load("/media/internal/grandPA/BG/bg1.png").convert(32)
bg.set_alpha(alpha) #set the alpha opacity 0-255

#create a fullscreen window (in future we will read the with fbset the actual resolution to set it, will we?)
screen = pygame.display.set_mode((0,0),pygame.FULLSCREEN)
#set refresh rate
clock = pygame.time.Clock()
#set the window name
pygame.display.set_caption("grandPA gets DMX")

# Set running and moving values
running = True
moving = False
  


#method to draw the game
def gamedrawing():
    #draw our screen background which is used on refresh clock
    #the numbers sets the zeropoint of the image to the coordinate system (top left)
    screen.blit(bg, (0,0))
    #draw our gobo01:
    gobo01 = pygame.image.load('/media/internal/grandPA/GOBO/gobo01.png')
    # Set the size for the image
    DEFAULT_IMAGE_SIZE = (gobo1width, gobo1height)
    # Scale the image to your needed size
    gobo01 = pygame.transform.scale(gobo01, DEFAULT_IMAGE_SIZE)
    # Rotate the image by any degree
    gobo01 = pygame.transform.rotate(gobo01, gobo1rotation)
    # Set a default position
    DEFAULT_IMAGE_POSITION = (x,y)
   # Show the gobo1
    screen.blit(gobo01,DEFAULT_IMAGE_POSITION)
    #display refreshrate
    pygame.display.update()



# lets create walls so the gobos dont get lost somewhere out of sight
leftWall = pygame.draw.rect(screen, (0,0,0),(0,0,2,1080),0)
rightWall = pygame.draw.rect(screen, (0,0,0),(1920,0,2,1080),0)





# SET GAME RUNNING
go = True
while go:

    #get the input events
    for event in pygame.event.get():
        if event.type == pygame.QUIT: sys.exit()
            

    #define the gobo size, so we will stop at left and right wall in the size of our gobo
    gobo1size = pygame.Rect(x,y,gobo1width,gobo1height)

    # KEYBOARD EVENTS
    #define key pushed events
    # keypushed = pygame.key.get_pressed()
    # #if key up is pressed, then
    # if keypushed[pygame.K_UP]:
    #     y -= speed
    # #if key right is pressed and gobo not hitting tha wall, then
    # if keypushed[pygame.K_RIGHT] and not gobo1size.colliderect(rightWall):
    #     x += speed
    # #if key down is pressed, then
    # if keypushed[pygame.K_DOWN]:
    #     y += speed
    # #if key left is pressed, then
    # if keypushed[pygame.K_LEFT] and not gobo1size.colliderect(leftWall):
    #     x -= speed

    gamedrawing()
    print ("now it blocks")
################
# THIS BLOCKS THE WHOLE LOOP: WHY???
    #define socketremotecontrol
    message = socket.recv()
    #KEY_UP Remotecontrolnew_x_pos
    if  'K_UP' in ("%s" % message):
        print('pfiu nach obe') #for debugging only
        y -= speed

    if  'K_RIGHT' in ("%s" % message):
        print('pfiu nach raechts') #for debugging only
        x += speed

    if  'K_DOWN' in ("%s" % message):
        print('pfiu nach abe') #for debugging only
        y += speedscreen.blit(gobo01,[x,y])

    if  'K_LEFT' in ("%s" % message):
        print('pfiu nach links') #for debugging only
        x -= speed

    #start sending coordinateds from remote script
    #if 'x_pos' in ("%s" % message):
    #   x += ("%s" % message)



#map input values from remote script:
    if  'x_pos' in ("%s" % message):
         x_pos = ("%s" % message)
         #is is used to only extract the numeric value without the wording
         new_x_pos = x_pos.replace('x_pos=', '')
         print(new_x_pos) #for debugging only
         #set the new x value, how do we do this?
         # since setting a hardcoded value works:
         #x = 100
         #above line createsTypeError: invalid destination position for blit
        #x =(new_x_pos)
         #and this does nothing
         #DEFAULT_IMAGE_POSITION = ((new_x_pos),800 )

    if  'a' in ("%s" % message):
         alpha = ("%s" % message)
         #is is used to only extract the numeric value without the wording
         new_alpha = alpha.replace('alpha ', '')
         print(new_alpha) #for debugging only
         #alpha = new_alpha
         #same trouble as above, how to change values in realtime
    
   #drawing our game
    gamedrawing()


    clock.tick(60)
