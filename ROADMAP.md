# **Roadmap / Next Steps:** 

## Currently in the pipeline: 
<p/>

- workaround the GPIO library debounce button stuff<p/>
- add volume setting with store function<p/>
- remove autostart button+beacon since its not used<p/>

<p/>

## Next to come:
- on image update, set slideshowtime to 5s to prevent madness <p/>
- make button debounce time selectable, values of 4seconds, 6secons and 10seconds <p/>
- disable OLA damon before updating ola, make a function<p/>
- make a cue loop function for dmx, e.g. ola_recorder --playback show01 --duration 30 --start 1000 --stop 10000 [see here](https://docs.openlighting.org/ola/man/man1/ola_recorder.1.html?__cf_chl_managed_tk__=pmd_uykauhsGehEgHY7kTiCowqZB00Kn7FrmfgCjXOfF_J0-1635233352-0-gqNtZGzNAxCjcnBszQh9)<p/>
- Update Everything => check olad version, if not 0.10.7, update this as well..... <p/>
- disable swap space, free performance <p/>
- fading images, show next, scale via sliders and via dmx/midi/osc...coming.. [pygame](https://www.taskboy.com/blog/A_simple_image_viewer_with_pygame.html)<p/>
- setdmxblack = fadeout possible? <p/>
- bluetooth features: connecting boombox, finish this, if somehow possible, already spent several days and nights <p/>
- make the led to flash every 10s so we know its alive<p/>
- power off button also closes browser tab<p/>

- move, rotate, scale images interactive => I do this via dmx/artnet => png gobo player<p/>
- remove old projector scripts <p/>
- when leaving VNC mode, presenter is not working correctly, fix this! <p/>
- function to directly drive LED stripes via [PWM](https://tutorials-raspberrypi.com/connect-control-raspberry-pi-ws2812-rgb-led-strips/) from the expansion board <p/>
- limit IP input to IP adresses only, no text etc. how do I do that??  <p/>
- when accessed over the internet, the ola panel is not visible, check how to handle ports with the remote, currently you can ask via mail for another port link..   <p/>
- playlist feature to play dmx/video01 and afterwards 02 and so on, tricky bit will be to gather the end of the file audio or dmx end counts?...   <p/>
- CP => remove set to 1 and make function to flip all OLA inputs to OLA outputs  <p/>
- OLA => is dmx thru working so we can see the show while recording<p/>
- parse dmx sequences from "*cough* from the garage" software to playback on PocketVJ (similar to mapping converter, can someone send me an exported file?)<p/>
- audio equalizer and volume slider in CP<p/>

## Website:

- Link How to mount the Expansion Board on Image kits to an actual tutorial
- 


## Just some ideas:

- enable https:// and create a PWA link (kind of an app<p/>
- slideshow with different times of images depending on number in file-name of image  <p/>
- Add gender recognition based on openCV to trigger gender based content <p/>
- Add scripts to trigger content based on humidity/temperature <p/>
- Add Buttons to trigger dmxshow together with videoplayer sync (already works with osc/scheduler, sync might cause a lot of webtraffic) <p/>
- slideshow with different times of images depending on number in file-name of image  <p/>
- Adding wake on lan feature? <p/>
- add wireless-power off to interfaces ? <p/>
- Integrate this script for more CPU infos in CP: https://gist.github.com/ecampidoglio/5009512#file-cpustatus-sh <p/>
- play images and videos after each other, depending on filename or with an ofx timeline, do we really need that?  <p/>
- System alive ping, which sends out an email every 5 minutes to tell that beamer&pocketvj is alive, alarm function (do you really need that?) <p/>
- AES67 Support, is it possible (https://github.com/dewiweb/ALSA-RAVENNA-AES67-Driver) Edit: Dante USB-dongles are supported <p/>
- Add DMX in control commands to control mapper with DMX <p/>
- Automount and connect to usb lte modems for remote internet, tricky since each brand is different<p/>
- Complete authors file, will this ever happen, there are soooo many people involved<p/>
- read color from video and create dmx fixture for it: https://github.com/MadSciLabs/ofxDmxUtils  https://github.com/pixout/PixView https://github.com/hzeller/rpi-rgb-led-matrix <p/>
- maybe just convert rgb value to CH1-255,value 0-255, so the reader must convert [float to byte](https://stackoverflow.com/questions/1914115/converting-color-value-from-float-0-1-to-byte-0-255/46575472), reading color in rgb would use 3 dmx channels, r,g,b, then we would need to define a square to read from (which will be our movie later.).
	[create a pyton script](https://www.openlighting.org/ola/developer-documentation/python-api/) to send 'ola_set_dmx --universe 1 --dmx 0,0,0,0,0,0,0,0,0,0,' create a structure (fixture control) or fork from somewhere..<p/>
- send video to framebuffer and make the reading there, like a screenshot https://gist.github.com/Darfk/5790622, use mplayer to stream to image sequence mplayer mf://*.jpg<p/>
- maybe this would also enable to [capture running screen](https://github.com/BoboTiG/python-mss)<p/>
- Does ofx and omx play into framebuffer? screenhoters are all tooo slow<p/>

- heating beamercases with [stressing the cpu](https://raw.githubusercontent.com/ssvb/cpuburn-arm/master/cpuburn-a53.S)<p/>

## **Video/Content** ##

- Bring tutorial videos to video folder 01_, 02_, 03_, 04_  <p/>


## **Tutorials/Manual:**

- rewrite mapper section since mapping without mouse and over remote is working now!, also write how to manually change numbers in the .xml file to get faster results<p/>
- Video tutorial for mapper sync<p/>
- remote mapper with webcam, is this possible?, I guess yes, but need to try<p/>
- create list of OSC/midi commands for website (without code around it)<p/>
- Video tutorial for presenter, how to create a simple menu card of a restaurant<p/>
- Video tutorial for VNC/Linux/remote Mapping/Recording using VNC&hdmi recorder<p/>

### **Pipeline/Provider/Freedom:**

- change webshop to an opensource variant, finish this!! <p/>
- create my own gitea server and mirror to away to github<p/>
- delete youtube channel, move to peertube<p/>





by magdesign 2021
