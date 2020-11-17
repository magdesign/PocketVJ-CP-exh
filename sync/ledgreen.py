#!/usr/bin/python
import time
from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode (GPIO.BCM) #BCM uses the GPIO numbers while BOARD uses the actual pin number
GPIO.setwarnings (False)

red = 11
green = 9
blue = 10

GPIO.setup(red,GPIO.OUT)
GPIO.setup(green,GPIO.OUT)
GPIO.setup(blue,GPIO.OUT)

print ("Green LED on")
GPIO.output(green,GPIO.HIGH)
time.sleep(0.5)
print ("Green LED off")
GPIO.output(green,GPIO.LOW)


GPIO.cleanup()


