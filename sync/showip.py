import pygame
import os
import re

#show IP adress on screen
#made by pocketvj.com

# gets the ip address
wlan = os.popen('ip addr show wlan0 | grep "\<inet\>" | awk \'{ print $2 }\' | awk -F "/" \'{ print $1 }\'').read().strip()
eth = os.popen('ip addr show eth0 | grep "\<inet\>" | awk \'{ print $2 }\' | awk -F "/" \'{ print $1 }\'').read().strip()

pygame.init()

# define the RGB values
white = (255, 255, 255)
black = (0, 0, 0)
blue = (0, 0 , 255)

#make window always fullscreen:
window = pygame.display.set_mode((0, 0), pygame.FULLSCREEN)
canvas = window.copy()

#find resolution:
info = pygame.display.Info()
#SIZE = WIDTH, HEIGHT = info.current_w, info.current_h
WIDTH = info.current_w
HEIGHT = info.current_h
# set the pygame window name
pygame.display.set_caption('ShowIP')

# create a font object.font file, font size
font = pygame.font.Font('freesansbold.ttf', 110)

# create a text surface object
text = font.render(('wlan: ' + str(wlan)), True, black)
text2 = font.render(('eth: ' + str(eth)), True, black)

# create a rectangular object for the text surface object
textRect = text.get_rect()
text2Rect = text2.get_rect()
# set the center of the rectangular object.
textRect.center = (WIDTH // 2, HEIGHT // 2)
text2Rect.center = (WIDTH // 2, HEIGHT // 3)

# infinite loop
while True:

	window.fill(white)

	# copying the text surface object
	# to the display surface object
	# at the center coordinate.
	window.blit(text, textRect)
	window.blit(text2, text2Rect)

	# iterate over the list of Event objects
	# that was returned by pygame.event.get() method.
	for event in pygame.event.get():

		pygame.display.update()
        # Draws the surface object to the screen.
        pygame.display.update()
