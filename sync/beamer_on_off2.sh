#!/bin/bash

IP=192.168.2.253

if [[ -z "$1" ]] || [[ $# -ne 1 ]] || [ "$1" != "--on" -a "$1" != "--off" ]
then
    echo "Usage: $0 [--on|--off]"
    exit 1
fi

#STATUS=$(curl --silent http://${IP}/us/power/index_1.htm | grep Power\ Status -A 1 | tail -n 1 | sed -e 's/<[^>]*>//g' |  sed -e 's/^[ \t]*//')

if [[ "$1" == "--on" ]]; then
    #if [[ "$STATUS" == "ON" ]]; then
    #    echo "Alreay on"
    #elif [[ "$STATUS" == "On starting up" ]]; then
    #    echo "Already starting up"
    #else
        echo "Turning ON"
        /var/www/sync/./pjlink-wrapper ${IP} power on > /dev/null
    #fi
elif [[ "$1" == "--off" ]]; then
    #if [[ "$STATUS" == "OFF" ]]; then
    #    echo "Alreay off"
    #elif [[ "$STATUS" == "On cooling down" ]]; then
    #    echo "Already shutting down"
    #else
        echo "Turning OFF"
        /var/www/sync/./pjlink-wrapper ${IP} power off > /dev/null
    #fi
else
    echo "Usage: $0 [--on|--off]"
    exit 1
fi
