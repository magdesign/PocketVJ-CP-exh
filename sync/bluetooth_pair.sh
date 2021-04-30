#!/bin/bash

arguments=$(cat /var/www/sync/blueaddress)

sudo killall bluealsa
pulseaudio --start

sudo bluetoothctl <<EOF

power on
agent on
default-agent
scan on
remove $arguments
trust $arguments
pair $arguments
connect $arguments
scan off
exit
EOF

