
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

print ("Red LED on")
GPIO.output(red,GPIO.HIGH)
time.sleep(0.5)
print ("Red LED off")
GPIO.output(red,GPIO.LOW)


GPIO.cleanup()

