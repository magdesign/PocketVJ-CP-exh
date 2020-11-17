#! /bin/sh

#start udp listener on port 5000 and map it to the udp commands file

sudo su - pvj -c 'socat udp-l:5000,fork system:/var/www/sync/./commandmapping.sh'>  /dev/null 2>&1

