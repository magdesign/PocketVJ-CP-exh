#!/usr/bin/python
#random audio player for pocketvj

import os, random, sys, select

def randomaudio ():
	while 1:
		randomfile =random.choice(os.listdir("/media/internal/audio"))
		print "play random audio"
		file = ' /media/internal/audio/' + randomfile
		os.system ('/usr/bin/omxplayer -o local ' + file)
		pause = random.randint(1,1) #define random pause from to value

#start the main program
randomaudio ()
