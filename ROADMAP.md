**Roadmap / Next Steps:** <p/>

- try the mapper mouse fix by [BjarneJensen](https://github.com/magdesign/PocketVJ-CP-v3/issues/92#issuecomment-787531172) and add it <p/>
- remove old projector scripts <p/>
- add bluetooth audio tethering to connect boomboxes  <p/>
- function to emulate modern bluetooth LE remotes [HID over Gatt](https://stackoverflow.com/questions/54745576/detecting-the-buttons-on-a-bluetooth-remote-hid-over-gatt) to remotely turn on/off projectors  <p/>
- screenrecorder to make draft reordings of vnc sessions (if there is enough performance)  <p/>
- when leaving VNC mode, presenter is not working correctly, fix this! <p/>
- add a brightness function to make the hdmi output [brighter or darker](https://discourse.osmc.tv/t/change-hdmi-monitor-brightness-aka-backlight-from-osmc-kodi/71892/8) <p/>
- limit IP input to IP adresses only, no text etc. how do I do that??  <p/>
- when accessed over the internet, the ola panel is not visible, check how to handle ports with the remote, currently you can ask via mail for another port link..   <p/>
- dmx comand to remote record (start / stop recording dmx) directly from light-console, on universe 50? <p/>
- playlist feature to play dmx/video01 and afterwards 02 and so on, tricky bit will be to gather the end of the file audio or dmx end counts?...   <p/>
- fix the annoying usb cable mouse issue when using mapper  <p/>
- add pygame to update as offline package under system settings, for countdown <p/>

<p/> just some ideas: <p/>

- Adding wake on lan feature? <p/>
- add wireless-power off to interfaces ? <p/>
- Integrate this script for more CPU infos in CP: https://gist.github.com/ecampidoglio/5009512#file-cpustatus-sh <p/>
- Add gender recognition based on openCV to trigger gender based content <p/>
- Add scripts to trigger content based on humidity/temperature <p/>
- Add Buttons to trigger dmxshow together with videoplayer sync (already works with osc/scheduler, sync might cause a lot of webtraffic) <p/>
- slideshow with different times of images depending on number in file-name of image  <p/>
- play images and videos after each other, depending on filename or with an ofx timeline, do we really need that?  <p/>
- System alive ping, which sends out an email every 5 minutes to tell that beamer&pocketvj is alive, alarm function. <p/>
- AES67 Support, is it possible (https://github.com/dewiweb/ALSA-RAVENNA-AES67-Driver) Edit: Dante USB-dongles are supported <p/>
- Add DMX in control commands to control the video player/mapper with DMX <p/>
- Automount and connect to usb lte modems for remote internet, tricky since each brand is different<p/>
- Complete authors file, will this ever happen, there are soooo many people involved<p/>
- read color from video and create dmx fixture for it: https://github.com/MadSciLabs/ofxDmxUtils  <p/>
- parse dmx sequences from "*cough* from the garage" software to playback on PocketVJ (similar to mapping converter, can someone send me an exported file?)<p/>
- install remote sounding tools for bands, so they can make quarantine music together: https://github.com/corrados/jamulus 
<p/>



**Tutorials/Manual:** <p/>

- how to change the distance of the pir sensor, factory wise set to ~5m and can be changed from ~3 to ~7m<p/>
- video connect usb soundcard for better audio quality<p/>
- video mapper syn c<p/>
- remote mapper with webcam, is this possible?<p/>
- create list of OSC/midi commands for website (without code around it)<p/>
- Video tutorial for presenter, how to create a simple menu card of a restaurant<p/>
- Video tutorial for VNC/Linux/remote Mapping/Recording using VNC&hdmi recorder<p/>

**Pipeline/Provider:** <p/>

- change webshop to an opensource variant, any suggestions? <p/>

**Test:** <p/>
- test autostart of dmxshow<p/>

