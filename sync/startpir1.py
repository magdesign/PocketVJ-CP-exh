#!/usr/bin/env python

"""
This script is used to trigger an action with a PIR sensor, for example starting a video
Setup the input pin where your PIR is connected
Setup trigger counts until action is triggered, this prevents fault triggers since the sensor outputs random false triggers
make sure you defined the MEDIA_PATH and created the loop and the trigger folder
"""

from time import sleep
import os
import RPi.GPIO as GPIO
import os, sys
import subprocess, signal, psutil
import random 

MEDIA_PATH = "/media/internal/pir"
OMXPLAYER = ['omxplayer', '-o', 'local', '--no-osd']
DEVNULL = open('/dev/null', 'w')

pir = 15 # set the GPIO number where your PIR is connected
triggers = 20 # set how many triggers until action starts, this debounces noise 20 equals ~10second of movement
counter = 0 # set glob counter to 0

GPIO.setmode(GPIO.BCM) #describes the pin numbering to name of the GPIO, e.g. GPIO27
GPIO.setup(pir, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.add_event_detect(pir, GPIO.RISING, bouncetime=2500) #debounce buttons

def play_loop():
    random_media_path = get_random_media_path('loop')
    if not random_media_path:
        print "error: get_random_media_path failed"
        sys.exit(1)
    cmd = OMXPLAYER + ['--loop', random_media_path]
    print cmd
    return subprocess.Popen(
        cmd,
        stdin=DEVNULL,
        stdout=DEVNULL,
        stderr=DEVNULL,
        preexec_fn=os.setsid)

def play_blocking():
    random_media_path = get_random_media_path('trigger')
    if not random_media_path:
        print "error: get_random_media_path failed"
        sys.exit(1)
    cmd = OMXPLAYER + [random_media_path]
    print cmd
    subprocess.call(
        cmd,
        stdin=DEVNULL,
        stdout=DEVNULL,
        stderr=DEVNULL,
        preexec_fn=os.setsid)

def get_random_media_path(folder):
    try:
        media_files = os.listdir(os.path.join(MEDIA_PATH, folder))
        if len(media_files):
            return os.path.join(MEDIA_PATH, folder, random.choice(media_files))
        else:
            return False
    except OSError:
        return False

def kill_player(process_pid):
    try:
        process = psutil.Process(process_pid)
    except psutil.NoSuchProcess:
        return
    for pid in process.children(recursive=True):
        os.kill(pid.pid, signal.SIGTERM)
        os.kill(process_pid, signal.SIGTERM)

print 'GPIO PIR trigger, please wait while'
print "initalizing...."
omxplayer = play_loop()
sleep (5)

while True:
    if (GPIO.input(pir) == True):
        counter += 1
	print ('                                 GPIO/PIR triggered\n{0}'.format(counter))
	if counter == triggers:
	    print "!!!   action   !!!  SLEEEEP 5s"
            kill_player(omxplayer.pid)
            play_blocking()
            omxplayer = play_loop()
	    sleep (5)
	
    if (GPIO.input(pir) == False):
        print 'GPIO/PIR Released'
	counter = 0
	print 'counter resetet'
	
    sleep(0.5);
GPIO.cleanup();
