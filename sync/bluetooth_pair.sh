#!/bin/bash

#this bluetooth audio thing is pain in the ass, crap shit bitch stuff
# even when speaker is autoconnect with this super slow script here, we hear no audio yet, something is broken, but this shitty scripts works!!
# I will figure this out once... already spent several days of my lifetime for this...... aaaaaaahh


arguments=$(cat /var/www/sync/blueaddress)

#things to do before starting
sudo killall bluealsa
pulseaudio --start

#run bluetooth wizard:
sudo bluetoothctl power on agent on default-agent  <<EOF
scan on 
exit
EOF

sudo bluetoothctl <<EOF
remove $arguments
EOF
echo "device should be removed now, sleeping for 2"
sleep 2
echo "end of sleep, now trusting"

sudo bluetoothctl <<EOF
trust $arguments
EOF

echo "trusted" $arguments 
sleep 1

sudo bluetoothctl <<EOF
pair $arguments
EOF

echo "pairing to $arguments should be done"
sleep 1

# i am not sure if scan might be turned off, could cause a disconnection?
sudo bluetoothctl <<EOF
connect $arguments
scan off
EOF


#not sure if exit kills the agent...?
#sudo bluetoothctl <<EOF
#exit
#EOF


echo "connecting to $arguments and scanning off"
echo "end"
exit 0

