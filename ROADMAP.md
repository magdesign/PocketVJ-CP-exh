# **Roadmap / Next Steps:** 

## Currently in the pipeline: 

- mapper => when selecting mapper preset 1-4, open fake keyboard so mouseless mapping is working same as when autostart<p/>
- upgrading resp. downgrading omxplayer also on recent images, option to install 2019 or 2018 build<p/>
- bluetooth features: connecting boombox, finish this!! <p/>
- bluetooth beacon, find soution for retrigger, re-scan <p/>
- measure power consumption (video mode, dmx mode, mapping mode, sheduler mode) and provide data in usermanual <p/>
- also provide rough meassurements in usermanual <p/>
- update usermanual with the new dmx control things, beacon things
- add gender and or facemask detection via webcam, test the new script  <p/>
- create a low power setting which disables quite a few services like lirc, hdmi output, webserver, wifi? <p/>


## Next to come:

- move, rotate, scale images interactive => I do this via dmx/artnet => png gobo player<p/>
- remove old projector scripts <p/>
- add bluetooth audio tethering to connect boomboxes (scan works, connect is wip) <p/>
- do some more bluetooth features  <p/>
- when leaving VNC mode, presenter is not working correctly, fix this! <p/>
- function to directly drive LED stripes via [PWM](https://tutorials-raspberrypi.com/connect-control-raspberry-pi-ws2812-rgb-led-strips/) from the expansion board
- limit IP input to IP adresses only, no text etc. how do I do that??  <p/>
- when accessed over the internet, the ola panel is not visible, check how to handle ports with the remote, currently you can ask via mail for another port link..   <p/>
- dmx comand to remote record (start / stop recording dmx) directly from light-console, on universe 50? <p/>
- playlist feature to play dmx/video01 and afterwards 02 and so on, tricky bit will be to gather the end of the file audio or dmx end counts?...   <p/>
- CP => remove set to 1 and make function to flip all OLA inputs to OLA outputs  <p/>
- OLA => is dmx thru working so we can see the show while recording<p/>
- parse dmx sequences from "*cough* from the garage" software to playback on PocketVJ (similar to mapping converter, can someone send me an exported file?)<p/>

## Just some ideas:

- slideshow with different times of images depending on number in file-name of image  <p/>
- Add gender recognition based on openCV to trigger gender based content <p/>
- Add scripts to trigger content based on humidity/temperature <p/>
- Add Buttons to trigger dmxshow together with videoplayer sync (already works with osc/scheduler, sync might cause a lot of webtraffic) <p/>
- slideshow with different times of images depending on number in file-name of image  <p/>
- Adding wake on lan feature? <p/>
- add wireless-power off to interfaces ? <p/>
- Integrate this script for more CPU infos in CP: https://gist.github.com/ecampidoglio/5009512#file-cpustatus-sh <p/>
- play images and videos after each other, depending on filename or with an ofx timeline, do we really need that?  <p/>
- System alive ping, which sends out an email every 5 minutes to tell that beamer&pocketvj is alive, alarm function. <p/>
- AES67 Support, is it possible (https://github.com/dewiweb/ALSA-RAVENNA-AES67-Driver) Edit: Dante USB-dongles are supported <p/>
- Add DMX in control commands to control the video player/mapper with DMX <p/>
- Automount and connect to usb lte modems for remote internet, tricky since each brand is different<p/>
- Complete authors file, will this ever happen, there are soooo many people involved<p/>
- read color from video and create dmx fixture for it: https://github.com/MadSciLabs/ofxDmxUtils  <p/>


<p/>


## **Tutorials/Manual:**

- rewrite mapper section since mapping without mouse and over remote is working now! <p/>
- Video connect usb soundcard for better audio quality<p/>
- Video tutorial for mapper sync<p/>
- remote mapper with webcam, is this possible?, I guess yes, but need to try<p/>
- create list of OSC/midi commands for website (without code around it)<p/>
- Video tutorial for presenter, how to create a simple menu card of a restaurant<p/>
- Video tutorial for VNC/Linux/remote Mapping/Recording using VNC&hdmi recorder<p/>

### **Pipeline/Provider/Freedom:**

- change webshop to an opensource variant, any suggestions? <p/>
- create my own gitea server to move away from github?<p/>

### **Test:**
- test if new omxplayer still syncs well<p/>
- test syncing 1 exhibition with 2 rtcs, what happens when master is changing file? push buttons? <p/>
- test autostart of dmxshow<p/>



by magdesign 2021
