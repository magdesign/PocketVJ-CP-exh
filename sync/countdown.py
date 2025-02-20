#!/usr/bin/python3

import pygame, sys
import time
from pygame.locals import *
import os

# set display
whiteColor = pygame.Color(255,255,255)
greyColor = pygame.Color(0,0,0)


pygame.init()
font = 200
width = font * 6
height = font
windowSurfaceObj = pygame.display.set_mode((width,height),pygame.FULLSCREEN)
pygame.display.set_caption('COUNTDOWN TIMER')
fontObj = pygame.font.Font('freesansbold.ttf',font)
msg = "00:00:00:000"
msgSurfaceObj = fontObj.render(msg, False,whiteColor)
msgRectobj = msgSurfaceObj.get_rect()
msgRectobj.topleft =(12,0)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
windowSurfaceObj.blit(msgSurfaceObj, msgRectobj)
pygame.display.update()
now = 0


#when set to 1 it will start, set to 0 countdown will stop
stopdsding = 1

#define my custom time value:
timevalue = 700

#define what shoud be trigger when countdown is over
triggervalue = "/var/www/sync/startmaster"


#hide mouse
pygame.mouse.set_cursor((8,8),(0,0),(0,0,0,0,0,0,0,0),(0,0,0,0,0,0,0,0))

try:
   run = 0
   
   while now >= 0 :
      # check for start
      if stopdsding == 1 or run == 1:
         if run == 0:
             #print (timevalue)
             start_time = (timevalue)

             start = time.time()
         now = start_time - (time.time() - start)
         # calculate h,m,s
         m,s = divmod(now,60)
         h,m = divmod(m,60)
         # Display
         msg= "%02d:%02d:%02d" % (h,m,s)
         psec = str(now-int(now))
         pstr = psec[1:5]
         msg = msg + str(pstr)
         pygame.draw.rect(windowSurfaceObj,greyColor,Rect(0,0,width,height))
         msgSurfaceObj = fontObj.render(msg, False,whiteColor)
         msgRectobj = msgSurfaceObj.get_rect()
         msgRectobj.topleft =(2,0)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
         windowSurfaceObj.blit(msgSurfaceObj, msgRectobj)
         pygame.display.update()
         # set to run continuously
         run = 1
      # check for stop
      if stopdsding == 0 or now <= 0:
         run = 0
         msg = "00:00:00:000"
         print (("function = ") + (triggervalue))
         pygame.draw.rect(windowSurfaceObj,greyColor,Rect(0,0,width,height))
         msgSurfaceObj = fontObj.render(msg, False,whiteColor)
         msgRectobj = msgSurfaceObj.get_rect()
         msgRectobj.topleft =(2,0)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
         windowSurfaceObj.blit(msgSurfaceObj, msgRectobj)
         pygame.display.update()
         os.system(triggervalue)
         #now = 0
         #print ("exiting now")

      # quit
      for event in pygame.event.get():
         if event.type == QUIT or event.type == MOUSEBUTTONUP or event.type == KEYDOWN:
            pygame.quit()
            sys.exit()

except KeyboardInterrupt:
  print ("  Quit")
  pygame.quit()
  sys.exit()

