#!/bin/bash
#LED Blinking 
/usr/bin/python /var/www/sync/ledblinking.py

#kill boot animatoin
sudo /var/www/sync/omxkill

#start stillshot
sudo fbi -T 1 -a -noverbose /media/internal/pir/stillshot.png &

#wait 2 seconds to settle down
sleep 2

#start pir script

sudo /usr/bin/python /var/www/sync/startpir1.py


exit 0
