#!/usr/bin/env python

#This script is used to test the pir trigger


from time import sleep
import os
import RPi.GPIO as GPIO
import random


GPIO.setmode(GPIO.BCM) #describes the pin numbering to name of the GPIO, e.g. GPIO27

# cleanup gpio
GPIO.cleanup()


# user defined variables:
pir = 15 #set the GPIO number where your PIR is connected
triggers = 20 #set how many triggers until action starts, this debounces noise 20 equals ~10second of movement

counter = 0 #set glob counter to 0


GPIO.setup(pir, GPIO.IN, pull_up_down=GPIO.PUD_UP)

#debounce buttons
GPIO.add_event_detect(pir, GPIO.RISING, bouncetime=2500)

#here is the testprogram:


print 'PIR-trigger script'

print "initalizing...."
sleep (3)

#here it should just trigger the loop video and loops this forever, exept we reach 20 movements in the counter

while True:
        if ( GPIO.input(pir) == True ):
                global counter
                counter += 1
                print ('GPIO Pressed\n{0}'.format(counter))
                if counter == (triggers):
                        print "                                 !!!   action   !!!  SLEEEEP 2s  "
                        counter = 0
                        # here it should choose a random video file from /media/internal/video/welcome/
                        sleep(2)
                        # when video finished playing it should loop a video from /media/internal/video/loop/

        if ( GPIO.input(pir) == False ):
                print '                                                            GPIO Released'
                counter = 0
                #as long as we are here, it must loop the video from /media/internal/video/loop/

        sleep(0.5);




