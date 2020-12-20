# this code displays a usb camera livestream on the connected screen

import pygame
import pygame.camera
from pygame.locals import *

DEVICE = '/dev/video0'
SIZE = (640, 480)
FILENAME = 'capture.png'

def camstream():
    pygame.init()
    pygame.camera.init()
    display = pygame.display.set_mode(SIZE, 0) 
    #try to go fullscreen
    #display = pygame.display.set_mode((1920,1080),pygame.FULLSCREEN)
    #does bot work due to resolution limit?

    #hide mouse
    pygame.mouse.set_visible(0) 

    camera = pygame.camera.Camera(DEVICE, SIZE)
    camera.start()
    screen = pygame.surface.Surface(SIZE, 0, display)
    capture = True
    while capture:
        screen = camera.get_image(screen)
        display.blit(screen, (0,0))
        pygame.display.flip()
        #this is for capturing an image
        for event in pygame.event.get():
            if event.type == QUIT:
                capture = False
            elif event.type == KEYDOWN and event.key == K_s:
                pygame.image.save(screen, FILENAME)
    camera.stop()
    pygame.quit()
    return

if __name__ == '__main__':
    camstream()



