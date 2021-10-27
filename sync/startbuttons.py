#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO
GPIO.setmode (GPIO.BCM)
GPIO.setwarnings (False)



BTN1 = ("sudo /var/www/sync/startdmxplaybackaudio01once &")
BTN2 = ("sudo /var/www/sync/startdmxplaybackaudio02once &")
BTN3 = ("sudo /var/www/sync/startdmxplaybackaudio03once &")


DEBOUNCE_TIME = 4

#buttons onboard
GPIO.setup(27, GPIO.IN)
GPIO.setup(18, GPIO.IN)
GPIO.setup(17, GPIO.IN)

# Button Klasse
class Button(object):
    def __init__(self, controller, gpio_input, start_command, stop_command):
        self.controller = controller
        self.gpio_input = gpio_input
        self.input_buffer = 0
        self.input_buffer_prev = 0
        self.state = False
        self.start_command = start_command
        self.stop_command = stop_command
        print"we initialized"
        
    def update_state(self):
        #print "we are in update state, sleep 0.1"
        sleep (0.1)
        self.input_buffer = GPIO.input(self.gpio_input) # Hardware Button lesen
        if ((self.input_buffer_prev == 0) and (self.input_buffer == 1)): # button press (entprellt)
            if self.state:
               if self.stop_command: self.stop_command() 
            else:
                if self.controller.last_button and self.controller.last_button != self.gpio_input:
                    last_button = self.controller.buttons[self.controller.last_button]
                    last_button.stop_command()
                if self.start_command: self.start_command()
            
            self.state = not self.state
            print "debounce sleep of:" 
            print (DEBOUNCE_TIME)
            sleep (DEBOUNCE_TIME)
            self.controller.last_button = self.gpio_input
            for button in self.controller.buttons.values():
                if button.gpio_input != self.gpio_input:
                    button.state = False
        #print "entprellung coming, also sleep"
        sleep (0.1)
        self.input_buffer_prev = self.input_buffer # Entprellung

# Buttons Klasse
class ButtonController(object):
    def __init__(self, button_data):
        self.buttons = {}
        self.last_button = None

        for button in button_data:
            self.buttons[button[0]] = Button(self, button[0], button[1], button[2])

        while(True):
            for button in self.buttons.values():
                button.update_state()

# Commands
def cmd_button01():     #define stop kommando
    os.system (BTN1)
    os.system ("sudo /usr/bin/python /var/www/sync/ledblue.py > /dev/null 2>&1 &")
    print "button1"
    
def cmd_button02():   #define function knob 1
    os.system (BTN2)
    os.system ("sudo /usr/bin/python /var/www/sync/ledred.py > /dev/null 2>&1 &")
    print "button2"
    
def cmd_button03():   #define function knob 2
    os.system ("sudo /usr/bin/python /var/www/sync/ledgreen.py > /dev/null 2>&1 &")
    os.system (BTN3)
    print "button3"

# Butten controller das zweite Argument definiert was passiert wenn der knopf zum
# zweiten mal gedrueckt wird

ButtonController([
  (27, cmd_button01, cmd_button01),
  (18, cmd_button02, cmd_button02),
  (17, cmd_button03, cmd_button03),
])

# cleanup
GPIO.cleanup()

