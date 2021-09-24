.. _troubleshooting:


TROUBLESHOOTING
===============

**Get help online:** https://github.com/magdesign/PocketVJ-CP-exh/issues

There will always be a solution :-)


Not able to connect CP via browser
***********************************

.. note::
    Some browsers force a https:// connection, which is not possible on PocketVJ and will cause trouble to not be able to connect.

If you try to connect the CP via webbrowser and get an error like this:


.. image:: _images/15_unable_to_connect.png


then all you have to do is to remove the  https:// in the addressbar:


.. image:: _images/15_disable_https.png





Movie plays, but stutters
*************************
=> Check if it is really a h.264 compressed movie.
=> Go to **SYSTEM SETTINGS** click **Powersupply** and check the message.


I dont get an IP address from the PocketVJ
******************************************
=> Be patient, try again.


.. note::
    Sometimes there are power peaks which can cause that the Wifi signal is not strong enough.
    Known are some issues with Hdmi to VGA adapters with old VGA devices who suck a lot of power.
    Also after plugging in some USB sticks. If there are many wireless devices in the room, change the wifi channel, since most units use channel 6 as standard.


Movie is not playing
********************

- Make sure that there is no space or special character in the filename and it is not longer than 16 characters, my_video_file.mp4 not: my video file.mp4.
- Make sure your video is converted with the h264 codec (this causes in most cases the error)
- Make sure your video data is in the correct folder (/media/internal/video/).
- Make sure your PocketVJ is not configured to ‘Slideshow’ mode.
- **Make sure audio output is set to HDMI/Jack** if there is no external soundcard connected, otherwise it will search for the ALSA device and will not start.

**USB-Stick does not work anymore on my computer** => Plug it back into the PocketVJ and Click UNMOUNT in the control panel.

Make sure to always mount and unmount your USB devices!

Connected several PocketVJs over a router
*****************************************
- Check the Gateway settings of your router, in original mode the PocketVJ runs in 192.168.2.1

Remote “Power On Projector” does not work
*****************************************


- Login to projector, enable PJLink, disable all passwords
- Under Service, enable DDDP and set the Crestron control IP to: 192.168.2.254
- make sure the Projector has following network info:


``IP: 192.168.2.254``

``Subnet: 255.255.255.0``

``Default Gateway: 192.168.2.1``

``DNS Server: 192.168.2.1``

- check this troubleshoot video: https://vimeo.com/379009854
- make sure the computer which is connected to the PocketVJ CP is not connected to second network, for example RJ45 in your local network and wifi to PocketVJ, if this is the case, unplug rj45 until it finds the projector, then you can plug it in again.
- Get a list of standard passwords for projectors here: https://github.com/magdesign/PocketVJ-CP-v3/blob/master/projector_passwords.md



**Special Functions**
*********************

Nearly everything is possible ;)

Open an issue on github and your desired function it will be available on the next update ;)

If you are in a hurry, you might drop me a donation to get things coded fast...





