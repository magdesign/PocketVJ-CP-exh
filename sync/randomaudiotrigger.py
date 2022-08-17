#!/usr/bin/python

#randomaudio trigger
#listen to random audio trigger on gpio pin3
# execute: python /var/www/sync/randomaudio.py
from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode (GPIO.BCM)
GPIO.setwarnings (False)

#kill the triggered script with:
# sudo kill $(pgrep -f 'python /var/www/sync/randomaudio.py') 

#user defined variables:
PIR = 3 #defined the gpio input number
PLAYTIME = 15

GPIO.setup (PIR, GPIO.IN)
#debounce buttons
GPIO.add_event_detect(PIR, GPIO.RISING, bouncetime=2500)


while True:
    if (GPIO.input(PIR) == True):
        print "triggered"
        print "now we start the random script for (PLAYTIME)defined  seconds in script"
        os.system ('/var/www/sync/startrandomaudiotrigger')
	sleep (3)
        print "playtime is over, listen again"
    if (GPIO.input(PIR) == False):
        print "          not triggered"
        sleep (0.5)



