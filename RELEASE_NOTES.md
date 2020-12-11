# PocketVJ Exhibition / Control Panel 3.x.x


## CP 4.0.0b 11. December 2020
- fixed startless output message in CP <br />
- fixed output message for Show0x/Video/Audio start <br />

## CP 4.0.0b 08. December 2020
- fixed typo to start dmx show only  <br />

## CP 4.0.0a 04.Dezember 2020  <br />
- fixed link to port to open ola panel  <br />
- added startaudio to arnetcontrol  <br />

## CP 4.0.0 04.Dezember 2020  <br />

- faster stop command, now every task is 1s faster!!  <br />
- complete rewerite of CP, better look and feel, more organised <br />
- option to set other filebrowser as default  <br />
- added new drag'n'drop filebrowser  <br />
- added much nicer slideshow  <br />
- added regular videoplayer without sync (to save network traffic <br />
- video sync settings for long and short videos <br />
- new tab with all network settings  <br />
- queries for diskspace, resolution, codec are now displayed propper  <br />
- cleand up mapping tab  <br />
- fixed clockdisplay  <br />
- cleaned up a lot of code  <br />
- dmx blackout on universe 0 -30  <br />

## Image 4.0.7 02.Dezember 2020 <br />
- add python3-pygame python-pygame python3-tk python-tk <br />
- compiled openCV <br />
- pretrained coffe model of gender detection <br />
- resized partitions for more system space  <br />
- larger swap space 1024mb    <br />

## CP 3.1.8b 17.November 2020<br />
- fixed dmx playback startup delay which was long when using 10+ universes, fixed with adding: '--no-verify-playback' <br />
- removed heavy packages for making update smaller in size<br />
- updated mapper so it starts into sync with autostart, tutorial coming <br />

## CP 3.1.8 06.November 2020<br />

- more performant mapper (this is the real killer thing :-) with sync function, currently works when manually going to Play Mode<p/>
- fixed create traingle in mapper <p/>
- cleaned up update buttons and update in backend <p/>
- update ola button is added, this updates ola and fixes the dmx rec/play lag, all files must be recorded new! Update takes 5min! <p/>
- knob to check olad version <p/>
- added stop webserver function to free ressources in edge cases <p/>
- added update to rt kernel, dont use it, its untested for now but there for future <p/>
- fixed usb stick mounting & unmounting <p/>
- new symbols in autostart to find things a bit better <p/>
- other small stuff I forgot to note and mention  <p/>

## CP 3.1.7 16.Oktober 2020<br />

- added mapper with audio over hdmi <p/>
- fixed volume of mapper <p/>

## CP 3.1.6b 15.Oktober 2020<br />

- fixed a bug in wifi channel setting and added CH11 <p/>
- added no-osd (to hide the pause sign) to all startlesser scripts <p/>


## CP 3.1.6 14.Oktober 2020<br />

- fixed pdf presenter, make sure to name your file demo.pdf and store in /internal/pdf/ folder <p/>
- fixed typo, rental is written without h :-)  <p/>
- added startlesseronce01 - startlesseronce10 files for faster video trigger via osc (this will not stop any task running!) <p/>
- updated osccontrol.js with the new startlesseronce commands <p/>

## CP 3.1.5 13.Oktober 2020<br />

- fixed button functions, it was self killing, now it works as expected  <p/>
- added "stop buttons" knob, to kill button input (needed to be seperate for not self killing)  <p/>
- when bushed a knob, the led will blink for 0.5 seconds as visuals control  <p/>
- fixed slideshow start from button  <p/>
- set button bounce time to 2sec (after pressing a button it takes 2 seconds until it will reads the next push)  <p/>
- fixed bug when using clock on screen, it did not disappear after hitting stop  <p/>
- added a tiny "attention" symbol under system settings to make a "renthal reset" as asked by the guys who do renthals <p/>
- updated osc commands to trigger videos faster without the stop all command see [here](https://github.com/magdesign/PocketVJ-CP-exh/issues/5)  <p/>

## CP 3.1.4 10.Oktober 2020<br />
- added midi recorder (beta, please test and report back!)   <p/>
- added midi playback    <p/>
- added midi/dmx/audio/video playback    <p/>

## CP 3.1.3 7.Oktober 2020<br />
- fixed ArtNet output which was not working, do a factory reset after updating to fix!  <p/>
- added IP range changer, most show equipment runs on 10.0.0.* networks, this can be cahnged now with one click  <p/>
- fixed start audio with dmx script, needed chmod permission  <p/>

## CP 3.1.2 27.September 2020<br />
- fixed scaling of mapper logo  <p/>
- added play dmxshow01 with audio01 (show01 to show05)  <p/>
- added a delay window to be able to sync manually dmxshow to video&audio  <p/>
- updated the dmxvideo scripts to the new style with delay syncing <p/>
- added USB output to dmxaudio/dmxvideo  <p/>
- added dmx to autostart <p/>
- added blackout dmx to stop button, so all lamps go to black when hitting stop <p/>
- added dmxaudio/dmxvideo to OSC commands  <p/>
- added dmxaudio/dmxvideo to UDP commands  <p/>
- fixed a wrong .js linke which caused CP to be unselectable <p/>

## CP 3.1.1 20.August 2020<br />
- removed softedge button under mapper, since there is already an "Edge Blend" button  <p/>
- added to Renthal Reset: disable scheduler, recreate full folder structure  <p/>

## CP 3.1.0 14.August 2020<br />
- added new mapper with more performance  <p/>
- added fullscreen function for mapper  <p/>
- added edgeblend function for mapper  <p/>
- added renthal reset (older versions than 4.0.6 need to copy 01_Testfile_HD.mp4 to /home/pvj/content/)  <p/>

## Image 4.0.6 14.August 2020 <br />
- copied standard files to /home/pvj/content/ for renthal preset function  <p/>

## CP 3.0.9 18.July 2020 <br />
- added UDP listener (users before Image 4.0.5 need to install socat) <p/>

## CP 3.0.8a 18.July 2020 <br />
- fixed an issue whit a .js script which was linked to an online version, caused that "tabs" on CP where not working <p/>

## Image 4.0.5 18. July 2020 <br />
- added socat for UDP listener (previous clients can install this manually with: apt-get install socat) <p/>

## CP 3.0.8 30.March 2020 <br />
- added artnet/dmx remote control <p/>

## CP 3.0.7 19.March 2020 <br />
- added maperremote button<p/>
- added kenburns slideshow (beta)<p/>

## Image 4.0.4 19.March 2020 <br />
- added pi3d library for kenburns slideshow<p/>
- added python-pil which is needed by pi3d<p/>

## CP 3.0.6 10.March 2020 <br />
- fixed "Scheduler Off", did not clean out scheduler before<p/>
- fixed user rights of videos triggered from scheduler<p/>

## CP 3.0.5 08.March 2020 <br />
- fixed function to test to conenct to a wifi network<p/>
- after updating make, click "Factory Rreset" in the red tab to apply changes systemwide!<p/>
- when no clicking on "Connect/Test" it will automatically set remote access on and protects CP with a login <p/>
- added function to look which wifi networks are available<p/>
- added function to check to which wifi you are connected<p/>

## Image 4.0.3 08.March 2020 <br />
- implemented RTC fix and remote wifi fix<p/>

## CP 3.0.4 05.March 2020 <br />
- fixed formatting of timer.txt file (browser writes hidden ^M$
 instead of $ only)<p/>
- added function to ask if projector is on or off<p/>
- added button to set audio volume of USB soundcard to 100% and store this value<p/>

## Image 4.0.2 04.March 2020 <br />
- added library for DHT11 sensor (Adafruit_Python_DHT)<p/>
- fixe audio volume for USB soundcard to standard 100% <p/>

## CP 3.0.3 04.March 2020 <br />
- fixed the pause function in headers shortcuts<p/>
- fixed hwclock issue (time was not saved), [see here](https://github.com/magdesign/PocketVJ-CP-exh/issues/1)<p/>
- added setting for an external temperature sensor<p/>

## CP 3.0.2 02.March 2020 <br />
- added dmx commands to scheduler<p/>
- added force resolution to 1920x1200<p/>
- added remotemapper (beta)<p/>
- fixed a typo in "update everything" function, users with CP 3.0.1 or older must update with [this](https://vimeo.com/308801484) method<p/>

## Image 4.0.1 March 2020 <br />
- added ofxJSON<p/>
- added remote mapper (also containng in CP update)<p/>

## CP 3.0.1 16.December 2019 <br />
- Updated midicontrol.cfg with commands to start/record dmx show 01-40<p/>
- Added scripts to play/record dmx show 01-40<p/>
- Added OSC control commands for dmx 01-05 play/record/play with video and enable/disable midi control<p/>

## CP 3.0.0 19.October 2019 <br />
- Main release<br />
- PVJ Exhibition Image 4.0 <br />


