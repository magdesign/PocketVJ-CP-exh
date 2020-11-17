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

print "Testing LEDs..."
print ""
print "Red LED on"
GPIO.output(blue,GPIO.HIGH)
time.sleep(0.5)
print "Red LED off"
GPIO.output(blue,GPIO.LOW)




print "Green LED on"
GPIO.output(green,GPIO.HIGH)
time.sleep(0.5)
print "Green LED off"
GPIO.output(green,GPIO.LOW)


print ""
print "Blue LED on"
GPIO.output(red,GPIO.HIGH)
time.sleep(1.5)
print "Blue LED off"
GPIO.output(red,GPIO.LOW)







GPIO.cleanup()
