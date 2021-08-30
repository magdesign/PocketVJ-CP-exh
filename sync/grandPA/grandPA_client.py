# -*- coding: utf-8 -*-

#   Hello World client in Python
#   Connects REQ socket to tcp://localhost:5555
#   Sends "Hello" to server, expects "World" back
#

import zmq
import argparse
import time 


# Initialize parser
parser = argparse.ArgumentParser()
# initalize zmq socket
context = zmq.Context()


#  Open Socket to talk to server
print("Connecting to hello world server…")
socket = context.socket(zmq.PUSH)
socket.connect("tcp://localhost:5555")



# this is for input arguments: 
# Adding optional argument
parser.add_argument("-x", "--xPosition", help = "x Position")
parser.add_argument("-y", "--yPosition", help = "y Position")
parser.add_argument("-a", "--Alpha")

parser.add_argument("-KEY_UP")
parser.add_argument("-KEY_RIGHT")
parser.add_argument("-KEY_DOWN")
parser.add_argument("-KEY_LEFT")

 
# Read arguments from command line
args = parser.parse_args()



# match arguments and send them to server 
# how would I write this asynchron, so all 3 arguemtnes can be sent simultaniously??
if args.xPosition:
    print("X position % s" % args.xPosition)
    socket.send(b"x_pos=%s" % args.xPosition)

if args.yPosition:
    print("Y position % s" % args.yPosition)
    socket.send(b"Y_pos % s" % args.yPosition)

if args.Alpha:
     print("Alpha value % s" % args.Alpha)
     socket.send(b"a % s" % args.Alpha)


# key simluating args
if args.KEY_UP:
     print("KEY_UP % s" % args.KEY_UP)
     socket.send(b"K_UP")

if args.KEY_RIGHT:
     print("KEY_RIGHT % s" % args.KEY_RIGHT)
     socket.send(b"K_RIGHT")

if args.KEY_DOWN:
     print("KEY_DOWN % s" % args.KEY_DOWN)
     socket.send(b"K_DOWN")

if args.KEY_LEFT:
     print("KEY_LEFT % s" % args.KEY_LEFT)
     socket.send(b"K_LEFT")



