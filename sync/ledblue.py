#!/usr/bin/python
import time
from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode (GPIO.BCM) #BCM uses the GPIO numbers while BOARD uses the actual pin number
GPIO.setwarnings (False)

red = 10
green = 9
blue = 11

GPIO.setup(red,GPIO.OUT)
GPIO.setup(green,GPIO.OUT)
GPIO.setup(blue,GPIO.OUT)

print ("Blue LED on")
GPIO.output(blue,GPIO.HIGH)
time.sleep(0.5)
print ("Blue LED off")
GPIO.output(blue,GPIO.LOW)


GPIO.cleanup()
