# -*- coding: utf-8 -*-

# this is in very early stagae, help from anyone very welcome
# image folders are located in  /media/internal/grandPA/
# trying to solve the socket thing first, so I can bind anything like tcp, dmx, artnet from PocketVJ system to grandPA
# how to map received messageds from socket to functions???
# usage: run grandPA.py and in another terminal grandpPA_client.py
import pygame
import sys
import time
import zmq
import threading

### INITIALIZE socket for external inputs to tcp://*:5555
context = zmq.Context()
socket = context.socket(zmq.PULL)
socket.bind("tcp://*:5555")
###

# INITIALIZE the GAME
pygame.init()
# set background
bg = pygame.image.load("/media/internal/grandPA/BG/bg1.png").convert(32)
bg.set_alpha(255) #set the alpha opacity 0-255

#create a fullscreen window (in future we will read the with fbset the actual resolution to set it, will we?)
screen = pygame.display.set_mode((0,0),pygame.FULLSCREEN)
#set refresh rate
clock = pygame.time.Clock()
#set the window name
pygame.display.set_caption("grandPA gets DMX")

#method to draw the game
def gamedrawing():
    #draw our screen background which is used on refresh clock
    #the numbers sets the zeropoint of the image to the coordinate system
    screen.blit(bg, (0,0))
    #draw our player or gobo:
    pygame.draw.rect(screen, (255,0,0), (x,y,gobo1width,gobo1height))
    #display refreshrate
    pygame.display.update()


#SOCKETLISTENER  the accept messages from grandPA_client.py
#should be put in a thread as soon as I realize how this is working
def socketlistener():
	while True:
#opening our socket listener server
	  message = socket.recv()
    	  print("Received request: %s" % message)
          K_LEFT = socket.recv(K_LEFT)
#                  if socket.recv[K_LEFT]:
#                   print("left received")

#SET VARIABLES
# x and y should always be the center in future, something like: pygame.display
x = 300 #would be nice to get half of pygame.FULLSCREEN / 2 ??
y = 240
speed = 5
gobo1width = 40
gobo1height = 80

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

    #EVENTS
    #define key pushed events
    keypushed = pygame.key.get_pressed()
    #if key up is pressed, then
    if keypushed[pygame.K_UP]:
        y -= speed
    #if key right is pressed and gobo not hitting tha wall, then
    if keypushed[pygame.K_RIGHT] and not gobo1size.colliderect(rightWall):
        x += speed
    #if key down is pressed, then
    if keypushed[pygame.K_DOWN]:
        y += speed
    #if key left is pressed, then
    if keypushed[pygame.K_LEFT] and not gobo1size.colliderect(leftWall):
        x -= speed
 


   #drawing our game
    gamedrawing()

    clock.tick(60)
