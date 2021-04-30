 #!/bin/bash

#this scan for pairable device, parse its MAC and writes to a file:

hcitool scan | grep -o -E '([[:xdigit:]]{1,2}:){5}[[:xdigit:]]{1,2}' > /var/www/sync/blueaddress 


#this prints the contenct of the file to show in CP output

cat /var/www/sync/blueaddress


# this would display with name and mac
#hcitool scan 
