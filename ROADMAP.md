# **Roadmap / Next Steps:** 

## Currently in the pipeline: 
<br />

- manual image player is a few pixel of vs. the videoplayer, must be pixel prezise in future!  <br />
- make sure disk will never be overfilled with logs or tmp files <br />
- play all video files random (modify the PIR script for this) there is a [sketch](https://github.com/magdesign/PocketVJ-CP-v3/blob/master/sync/randomvideoplayer) <br />
- add volume setting with store function<p/>
- move overlay into a seperate folder, update manual on this<p/>
<p/>

## Next to come:
- implement gif player: https://github.com/chidea/FBpyGIF<p/>
- make a cue loop function for dmx, e.g. ola_recorder --playback show01 --duration 30 --start 1000 --stop 10000 [see here](https://docs.openlighting.org/ola/man/man1/ola_recorder.1.html?__cf_chl_managed_tk__=pmd_uykauhsGehEgHY7kTiCowqZB00Kn7FrmfgCjXOfF_J0-1635233352-0-gqNtZGzNAxCjcnBszQh9)<p/>
- Update Everything => check olad version, if not 0.10.7, update this as well..... <p/>
- disable swap space, free performance <p/>
- fading images, show next, scale via sliders and via dmx/midi/osc...coming.. [pygame](https://www.taskboy.com/blog/A_simple_image_viewer_with_pygame.html)<p/>
- setdmxblack = fadeout possible? <p/>
- bluetooth features: connecting boombox, finish this, if somehow possible, already spent several days and nights <p/>
- make the led to flash every 10s so we know its alive<p/>
- power off button also closes browser tab<p/>

- move, rotate, scale images interactive => I do this via dmx/artnet => png gobo player<p/>
- when leaving VNC mode, presenter is not working correctly, fix this! <p/>
- limit IP input to IP adresses only, no text etc. how do I do that??  <p/>
- when accessed over the internet, the ola panel is not visible, check how to handle ports with the remote, currently you can ask via mail for another port link..   <p/>
- playlist feature to play dmx/video01 and afterwards 02 and so on, tricky bit will be to gather the end of the file audio or dmx end counts?...   <p/>
- CP => remove set to 1 and make function to flip all OLA inputs to OLA outputs  <p/>
- OLA => is dmx thru working so we can see the show while recording? <p/>
- parse dmx sequences from "*cough* from the garage" software to playback on PocketVJ (similar to mapping converter, can someone send me an exported file?)<p/>
- audio equalizer and volume slider in CP<p/>

## Website:

- Link How to mount the Expansion Board on Image kits to an actual tutorial<p/>



## Just some ideas:

- enable https:// and create a PWA link (kind of an app)<p/>
- slideshow with different times of images depending on number in file-name (image_time5.png) of image  <p/>
- Add scripts to trigger content based on humidity/temperature <p/>
- Add Buttons to trigger dmxshow together with videoplayer sync (already works with osc/scheduler, sync might cause a lot of webtraffic) <p/>
- add wireless-power off to interfaces ? <p/>
- play images and videos after each other, depending on filename or with an ofx timeline, do we really need that?  <p/>
- System alive ping, which sends out an email every 5 minutes to tell that beamer&pocketvj is alive, alarm function (do you really need that?) <p/>
- AES67 Support, is it possible (https://github.com/dewiweb/ALSA-RAVENNA-AES67-Driver) Edit: Dante USB-dongles are supported <p/>
- Add DMX in control commands to control mapper with DMX <p/>
- Automount and connect to usb lte modems for remote internet, tricky since each brand is different<p/>
- Complete authors file, will this ever happen, there are soooo many people involved<p/>
- read color from video and create dmx fixture for it: https://github.com/MadSciLabs/ofxDmxUtils  https://github.com/pixout/PixView https://github.com/hzeller/rpi-rgb-led-matrix <p/>
	[create a pyton script](https://www.openlighting.org/ola/developer-documentation/python-api/) to send 'ola_set_dmx --universe 1 --dmx 0,0,0,0,0,0,0,0,0,0,' create a structure (fixture control) or fork from somewhere..<p/>
- maybe this would also enable to [capture running screen](https://github.com/BoboTiG/python-mss)<p/>
- Does ofx and omx play into framebuffer? screenshooters are all tooo slow, already tested<p/>
- Integrate this script for more CPU infos in CP: https://gist.github.com/ecampidoglio/5009512#file-cpustatus-sh <p/>
- heating beamercases with [stressing the cpu](https://raw.githubusercontent.com/ssvb/cpuburn-arm/master/cpuburn-a53.S)<p/>

- faster vnc: https://lists.gnu.org/archive/html/qemu-devel/2013-01/msg01388.html https://github.com/hanzelpeter/dispmanx_vnc

## **Tutorials/Manual:**

- Videotutorial for masking in mapper with black.jpg and also with the new paint mask function<p/>
- rewrite mapper section since mapping without mouse and over remote is working now!, also write how to manually change numbers in the .xml file to get faster results<p/>
- remote mapper with webcam, is this possible?, I guess yes, but need to try<p/>
- create list of OSC/midi commands for website (without code around it)<p/>
- Video tutorial for presenter, how to create a simple menu card of a restaurant<p/>
- Video tutorial for VNC/Linux/remote Mapping/Recording using VNC&hdmi recorder or screenrecorder<p/>
- how to fix a broken sd card tutorial<p/>
- hyperion led stripes video tutorial<p/>

### **Pipeline/Provider/Freedom:**

- change webshop to an opensource variant, finish this!! <p/>
- create my own gitea server and mirror on github<p/>
- shall I stop this project and give up society? meaning freaking out and diving into a nature project somewhere.. <p/>


by magdesign 2022
