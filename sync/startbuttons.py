#!/usr/bin/python3

import time
from time import sleep
import os
import RPi.GPIO as GPIO


#the functions for the buttons

BTN1 = ("sudo /var/www/sync/startimage &")
BTN2 = ("sudo /var/www/sync/startimage &")
BTN3 = ("sudo /var/www/sync/startimage &")


#here we define each button function:

def button1_callback(channel):
   os.system ("sudo /usr/bin/python /var/www/sync/ledblue.py &")
   os.system (BTN1)
   print("Button1 was pushed!")

def button2_callback(channel):
    os.system ("sudo /usr/bin/python /var/www/sync/ledred.py &")
    os.system (BTN2)
    print("Button2 was pushed!")

def button3_callback(channel):
    os.system ("sudo /usr/bin/python /var/www/sync/ledgreen.py &")
    os.system (BTN3)
    print("Button3 was pushed!")


#intialize the buttons as inputs

GPIO.setwarnings(False) # Ignore warning for now
GPIO.setmode (GPIO.BCM) #BCM uses the GPIO numbers while BOARD uses the actual pin number
GPIO.setup(17, GPIO.IN, pull_up_down=GPIO.PUD_DOWN) # Set gpio17 button1 to be an input pin and set initial value to be pulled low (off)
GPIO.setup(18, GPIO.IN, pull_up_down=GPIO.PUD_DOWN) # Set gpio18 button2 to be an input pin and set initial value to be pulled low (off)
GPIO.setup(27, GPIO.IN, pull_up_down=GPIO.PUD_DOWN) # Set gpio27 button3 to be an input pin and set initial value to be pulled low (off)

#the main programm
class MainProgram():
	GPIO.add_event_detect(27,GPIO.RISING,callback=button1_callback,bouncetime=4000) # Setup event on pin 17 rising edge
	GPIO.add_event_detect(18,GPIO.RISING,callback=button2_callback,bouncetime=4000) # Setup event on pin 18 rising edge
	GPIO.add_event_detect(17,GPIO.RISING,callback=button3_callback,bouncetime=4000) # Setup event on pin 27 rising edge

print("running")

#this would kill the programm with an enter
#message = input("Press enter to quit/n/n") # Run until someone presses enter

#keeps the programm running forever:
while(True):
   MainProgram()

GPIO.cleanup() # Clean up
