from gpiozero import LED, Button
from signal import pause
import os
import time

#this is the new botton rigger script since the "old" one has trouble with debouncing

continue_running=True

#define the bouncetime here
bounce_time = 3

#led colors
led_blau  = LED(11)
led_rot   = LED(10)
led_gruen = LED(9)

#the main 3 functions of the buttons:

BTN1 = ("sudo /var/www/sync/clockdisplay &")
BTN2 = ("sudo /var/www/sync/clockdisplay &")
BTN3 = ("sudo /var/www/sync/clockdisplay &")

#what to trigger:

def das_Erste():
	led_blau.on()
	os.system(BTN1)
	print("we are doing the first thing")
	time.sleep(bounce_time)
	led_blau.off()

def das_Zweite():
	led_rot.on()
	os.system(BTN2)
	print("we are doing the second thing")
	time.sleep(bounce_time)
	led_rot.off()

def das_Dritte():
	led_gruen.on()
	os.system(BTN3)
	print("we are doing the third thing")
	time.sleep(bounce_time)
	led_gruen.off()

#hauptprogramm:
def main():
	global continue_running
	button1=Button(27, pull_up=False)
	button1.when_pressed = das_Erste

	button2=Button(18, pull_up=False)
	button2.when_pressed = das_Zweite

	button3=Button(17, pull_up=False)
	button3.when_pressed = das_Dritte

	while(continue_running):
          time.sleep(0.1)


if __name__ == "__main__": main()
