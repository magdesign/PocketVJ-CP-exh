<?php

//# Shortcuts

if ($_GET['action'] == 'pause') {
	$outputtext =  "pause video";
	system ("sudo /var/www/sync/dbuscontrol.sh pause > /dev/null 2>&1");
	system("sudo /var/www/sync/mapperpause");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'fastforward') {
	$outputtext =  "seek video forward";
	system ("sudo /var/www/sync/dbuscontrol.sh seek 10000000");
}

if ($_GET['action'] == 'stop') {
	$outputtext =  "all players stopped";
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	}

if ($_GET['action'] == 'stopvideo') {
	$outputtext =  "stop video player only";
	system ("sudo /var/www/sync/stopvideo > /dev/null 2>&1");
}

if ($_GET['action'] == 'pause') {
	exec("sudo /var/www/sync/pause.py");
	$outputtext = "Pause, click again to resume";
}

if ($_GET['action'] == 'screenshot') {
	exec("sudo /var/www/sync/screenshot");
	$outputtext = "printscreen saved in /media/internal/images";
}

///////////////////
//# Video Section
/////////////////////

if ($_GET['action'] == 'setsync_long') {
	$outputtext =  "set sync script to long videos";
	system ("sudo cp /var/www/sync/omxplayer-sync-long /usr/bin/omxplayer-sync");
}

if ($_GET['action'] == 'setsync_short') {
	$outputtext =  "stet sync script to short videos";
	system ("sudo cp /var/www/sync/omxplayer-sync-short /usr/bin/omxplayer-sync");
}

if ($_GET['action'] == 'startmasterwifi') {
	$outputtext =  "start master over wifi sync, be patient";
	system ("sudo /var/www/sync/startmasterwifi");
}

if ($_GET['action'] == 'startslavewifi') {
	$outputtext =  "start slave over wifi sync, be patient";
	system ("sudo /var/www/sync/startslavewifi");
}

if ($_GET['action'] == 'startmaster') {
	#exec("sudo /var/www/sync/startmaster");
	exec("sudo /var/www/sync/alsatester");
	$outputtext = "start player as master";
}

if ($_GET['action'] == 'startmaster01') {
	exec("sudo /var/www/sync/startmaster01");
	$outputtext = "start video 01 loop";
}

if ($_GET['action'] == 'startmaster02') {
	exec("sudo /var/www/sync/startmaster02");
	$outputtext = "start video 02 loop";
}

if ($_GET['action'] == 'startmaster03') {
	exec("sudo /var/www/sync/startmaster03");
	$outputtext = "start video 03 loop";
}

if ($_GET['action'] == 'startmaster04') {
	exec("sudo /var/www/sync/startmaster04");
	$outputtext = "start video 04 loop";
}

if ($_GET['action'] == 'startmaster05') {
	exec("sudo /var/www/sync/startmaster05");
	$outputtext = "start video 05 loop";
}

if ($_GET['action'] == 'startmaster06') {
	exec("sudo /var/www/sync/startmaster06");
	$outputtext = "start video 06 loop";
}

if ($_GET['action'] == 'startmaster07') {
	exec("sudo /var/www/sync/startmaster07");
	$outputtext = "start video 07 loop";
}

if ($_GET['action'] == 'startmaster08') {
	exec("sudo /var/www/sync/startmaster08");
	$outputtext = "start video 08 loop";
}

if ($_GET['action'] == 'startmaster09') {
	exec("sudo /var/www/sync/startmaster09");
	$outputtext = "start video 09 loop";
}

if ($_GET['action'] == 'startmaster10') {
	exec("sudo /var/www/sync/startmaster10");
	$outputtext = "start video 10 loop";
}

if ($_GET['action'] == 'startmaster11') {
	exec("sudo /var/www/sync/startmaster11");
	$outputtext = "start video 11 loop";
}

if ($_GET['action'] == 'startmaster12') {
	exec("sudo /var/www/sync/startmaster12");
	$outputtext = "start video 12 loop";
}

if ($_GET['action'] == 'startmaster13') {
	exec("sudo /var/www/sync/startmaster13");
	$outputtext = "start video 13 loop";
}

if ($_GET['action'] == 'startmaster14') {
	exec("sudo /var/www/sync/startmaster14");
	$outputtext = "start video 14 loop";
}

if ($_GET['action'] == 'startmaster15') {
	exec("sudo /var/www/sync/startmaster15");
	$outputtext = "start video 15 loop";
}

if ($_GET['action'] == 'startmaster16') {
	exec("sudo /var/www/sync/startmaster16");
	$outputtext = "start video 16 loop";
}

if ($_GET['action'] == 'startmasteronce') {
	exec("sudo /var/www/sync/startmasterone");
	$outputtext = "start player as master once";
}

if ($_GET['action'] == 'stopslaves') {
	$outputtext =  "stop to all slaves sent";
	system ("sudo /var/www/sync/stopslaves > /dev/null 2>&1");
}


///////////////////////
//# Video without sync
///////////////////////

if ($_GET['action'] == 'startless') {
	exec("sudo /var/www/sync/startless > /dev/null 2>&1");
	$outputtext = "start video without sync";
}

if ($_GET['action'] == 'startless01') {
	exec("sudo /var/www/sync/startless01");
	$outputtext = "start video 01";
}

if ($_GET['action'] == 'startless02') {
	exec("sudo /var/www/sync/startless02");
	$outputtext = "start video 02";
}

if ($_GET['action'] == 'startless03') {
	exec("sudo /var/www/sync/startless03");
	$outputtext = "start video 03";
}

if ($_GET['action'] == 'startless04') {
	exec("sudo /var/www/sync/startless04");
	$outputtext = "start video 04";
}

if ($_GET['action'] == 'startless05') {
	exec("sudo /var/www/sync/startless05");
	$outputtext = "start video 05";
}

if ($_GET['action'] == 'startless06') {
	exec("sudo /var/www/sync/startless06");
	$outputtext = "start video 06";
}

if ($_GET['action'] == 'startless07') {
	exec("sudo /var/www/sync/startless07");
	$outputtext = "start video 07";
}

if ($_GET['action'] == 'startless08') {
	exec("sudo /var/www/sync/startless08");
	$outputtext = "start video 08";
}

if ($_GET['action'] == 'startless09') {
	exec("sudo /var/www/sync/startless09");
	$outputtext = "start video 09";
}

if ($_GET['action'] == 'startless10') {
	exec("sudo /var/www/sync/startless10");
	$outputtext = "start video 10";
}

if ($_GET['action'] == 'startless11') {
	exec("sudo /var/www/sync/startless11");
	$outputtext = "start video 11";
}

if ($_GET['action'] == 'startless12') {
	exec("sudo /var/www/sync/startless12");
	$outputtext = "start video 12";
}

//////////////////////////
// Video once without sync
//////////////////////////

if ($_GET['action'] == 'startlessonce01') {
	exec("sudo /var/www/sync/startlessonce01");
	$outputtext = "start video 01 once";
}

if ($_GET['action'] == 'startlessonce02') {
	exec("sudo /var/www/sync/startlessonce02");
	$outputtext = "start video 02 once";
}

if ($_GET['action'] == 'startlessonce03') {
	exec("sudo /var/www/sync/startlessonce03");
	$outputtext = "start video 03 once";
}

if ($_GET['action'] == 'startlessonce04') {
	exec("sudo /var/www/sync/startlessonce04");
	$outputtext = "start video 04 once";
}

if ($_GET['action'] == 'startlessonce05') {
	exec("sudo /var/www/sync/startlessonce05");
	$outputtext = "start video 05 once";
}

if ($_GET['action'] == 'startlessonce06') {
	exec("sudo /var/www/sync/startlessonce06");
	$outputtext = "start video 06 once";
}

if ($_GET['action'] == 'startlessonce07') {
	exec("sudo /var/www/sync/startlessonce07");
	$outputtext = "start video 07 once";
}

if ($_GET['action'] == 'startlessonce08') {
	exec("sudo /var/www/sync/startlessonce08");
	$outputtext = "start video 08 once";
}

if ($_GET['action'] == 'startlessonce09') {
	exec("sudo /var/www/sync/startlessonce09");
	$outputtext = "start video 09 once";
}

if ($_GET['action'] == 'startlessonce10') {
	exec("sudo /var/www/sync/startlessonce10");
	$outputtext = "start video 10 once";
}

//////////////////////
// Video once with sync
////////////////////////

if ($_GET['action'] == 'startmasteronce01') {
	exec("sudo /var/www/sync/startmasterone01");
	$outputtext = "start video 01 once";
}

if ($_GET['action'] == 'startmasteronce02') {
	exec("sudo /var/www/sync/startmasterone02");
	$outputtext = "start video 02 once";
}

if ($_GET['action'] == 'startmasteronce03') {
	exec("sudo /var/www/sync/startmasterone03");
	$outputtext = "start video 03 once";
}

if ($_GET['action'] == 'startmasteronce04') {
	exec("sudo /var/www/sync/startmasterone04");
	$outputtext = "start video 04 once";
}

if ($_GET['action'] == 'startmasteronce05') {
	exec("sudo /var/www/sync/startmasterone05");
	$outputtext = "start video 05 once";
}

if ($_GET['action'] == 'startmasteronce06') {
	exec("sudo /var/www/sync/startmasterone06");
	$outputtext = "start video 06 once";
}

if ($_GET['action'] == 'startmasteronce07') {
	exec("sudo /var/www/sync/startmasterone07");
	$outputtext = "start video 07 once";
}

if ($_GET['action'] == 'startmasteronce08') {
	exec("sudo /var/www/sync/startmasterone08");
	$outputtext = "start video 08 once";
}

if ($_GET['action'] == 'startmasteronce09') {
	exec("sudo /var/www/sync/startmasterone09");
	$outputtext = "start video 09 once";
}

if ($_GET['action'] == 'startmasteronce10') {
	exec("sudo /var/www/sync/startmasterone10");
	$outputtext = "start video 10 once";
}

if ($_GET['action'] == 'startmasteronce11') {
	exec("sudo /var/www/sync/startmasterone11");
	$outputtext = "start video 11 once";
}

if ($_GET['action'] == 'startmasteronce12') {
	exec("sudo /var/www/sync/startmasterone12");
	$outputtext = "start video 12 once";
}

if ($_GET['action'] == 'startmasteronce13') {
	exec("sudo /var/www/sync/startmasterone13");
	$outputtext = "start video 13 once";
}

if ($_GET['action'] == 'startmasteronce14') {
	exec("sudo /var/www/sync/startmasterone14");
	$outputtext = "start video 14 once";
}

if ($_GET['action'] == 'startmasteronce15') {
	exec("sudo /var/www/sync/startmasterone15");
	$outputtext = "start video 15 once";
}

if ($_GET['action'] == 'startmasteronce16') {
	exec("sudo /var/www/sync/startmasterone16");
	$outputtext = "start video 16 once";
}

if ($_GET['action'] == 'startmasteronce17') {
	exec("sudo /var/www/sync/startmasterone17");
	$outputtext = "start video 17 once";
}

if ($_GET['action'] == 'startmasteronce18') {
	exec("sudo /var/www/sync/startmasterone18");
	$outputtext = "start video 18 once";
}

if ($_GET['action'] == 'startmasteronce19') {
	exec("sudo /var/www/sync/startmasterone19");
	$outputtext = "start video 19 once";
}

if ($_GET['action'] == 'startmasteronce20') {
	exec("sudo /var/www/sync/startmasterone20");
	$outputtext = "start video 20 once";
}

if ($_GET['action'] == 'startslaveonce') {
	exec("sudo /var/www/sync/startslaveonce");
	$outputtext =  "start player as slave once";
}

if ($_GET['action'] == 'startslave') {
	exec("sudo /var/www/sync/startslave");
	$outputtext =  "start player as slave";
}

if ($_GET['action'] == 'startmasterusb') {
	exec("sudo /var/www/sync/startmasterusb");
	$outputtext =  "start player in usb mode";
}

if ($_GET['action'] == 'starthplayer') {
	exec("sudo /var/www/sync/starthplayer");
	$outputtext =  "start hplayer with OSC control";
}

/////////////////////////////
// Slideshow after video once
/////////////////////////////

if ($_GET['action'] == 'enableslideafter') {
	$outputtext =  "enable slideshow after video played once";
	system ("sudo /var/www/sync/set_enableslideafter > /dev/null 2>&1");
}

if ($_GET['action'] == 'disableslideafter') {
	$outputtext =  "disable slideshow after video played once";
	system ("sudo /var/www/sync/set_disableslideafter > /dev/null 2>&1");
}


//////////////////////
// Video fader
////////////////////////

if ($_GET['action'] == 'videofadeout') {
	exec("sudo /var/www/sync/fadeOUTscript");
	$outputtext = "Fade video to black (still playing)";
}

if ($_GET['action'] == 'videofadein') {
	exec("sudo /var/www/sync/fadeINscript");
	$outputtext = "Fade video In (still playing)";
}


///////////////////////////////
// Imageplayer / slideshow
////////////////////////////////

if ($_GET['action'] == 'stopimage') {
	$outputtext =  "image player stopped";
	system("sudo killall fbi");
	#hier muss noch kill feh und x rein?
}

if ($_GET['action'] == 'image') {
	$outputtext =  "start slide show";
	system("sudo /var/www/sync/startimage > /dev/null &");
}

if ($_GET['action'] == 'imageusb') {
	$outputtext =  "start image player from usb";
	system("sudo /var/www/sync/startimageusb > /dev/null &");
}

if ($_GET['action'] == 'startimagemanual') {
	$outputtext =  "start image player manual";
	system("sudo /var/www/sync/startimagemanual > /dev/null & ");
}

if ($_GET['action'] == 'imagekenburn') {
	$outputtext =  "start slideshow ken burn";
	system("sudo /var/www/sync/startimagekenburn > /dev/null & ");
	//shell_exec("sudo /usr/bin/python /home/pvj/pi3d_demos/Slideshow_3d.py");
	
}

if ($_GET['action'] == 'overlay') {
	$outputtext =  "start .png overlay";
	system ("sudo sed -i '/OVERLAY=/c OVERLAY=ON' /var/www/sync/startmaster");
	system("sudo /var/www/sync/overlay");
}

if ($_GET['action'] == 'stopoverlay') {
	$outputtext =  "stop .png overlay";
	system ("sudo sed -i '/OVERLAY=/c OVERLAY=OFF' /var/www/sync/startmaster");
	system("sudo /var/www/sync/overlaystop");
	//system("sudo killall -9 /home/pvj/raspidmx/pngview/./pngview");
}

//# Slideshow Time

if ($_GET['action'] == 'slidetime0') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	//change slide time on old slideshow
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=0.1/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=0.1/' /var/www/sync/xsessionslidesusb");
	//change slidetime on new slideshow
	system("sudo sed -ri 's/^time_delay =.+$/time_delay = 1.5/' /home/pvj/pi3d_demos/PictureFrame.py");
	//change fadetime new slideshow
	system("sudo sed -ri 's/^fade_time =.+$/fade_time = 1.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//enable kenburns on new slideshow
	system("sudo sed -ri 's/^KENBURNS = .+$/KENBURNS = True/' /home/pvj/pi3d_demos/PictureFrame.py");
	//start new slidshow again
	system("sudo /var/www/sync/startimagekenburn  > /dev/null 2>&1");
	//system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime as fast as possible";
}


if ($_GET['action'] == 'slidetime5') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	//change slide time on old slideshow
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=5/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=5/' /var/www/sync/xsessionslidesusb");
	//change slidetime on new slideshow
	system("sudo sed -ri 's/^time_delay =.+$/time_delay = 5.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//change fadetime new slideshow
	system("sudo sed -ri 's/^fade_time =.+$/fade_time = 2.5/' /home/pvj/pi3d_demos/PictureFrame.py");
	//enable kenburns on new slideshow
	system("sudo sed -ri 's/^KENBURNS = .+$/KENBURNS = True/' /home/pvj/pi3d_demos/PictureFrame.py");
	//start new slidshow again
	system("sudo /var/www/sync/startimagekenburn > /dev/null 2>&1");
	//system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 5s";
}

if ($_GET['action'] == 'slidetime10') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
//change slide time on old slideshow
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=10/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=10/' /var/www/sync/xsessionslidesusb");
	//change slidetime on new slideshow
	system("sudo sed -ri 's/^time_delay =.+$/time_delay = 10.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//change fadetime new slideshow
	system("sudo sed -ri 's/^fade_time =.+$/fade_time = 3.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//enable kenburns on new slideshow
	system("sudo sed -ri 's/^KENBURNS = .+$/KENBURNS = True/' /home/pvj/pi3d_demos/PictureFrame.py");
	//start new slidshow again
	system("sudo /var/www/sync/startimagekenburn > /dev/null 2>&1");
	//system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 10s";
}

if ($_GET['action'] == 'slidetime15') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=15/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=15/' /var/www/sync/xsessionslidesusb");
	//change slidetime on new slideshow
	system("sudo sed -ri 's/^time_delay =.+$/time_delay = 15.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//change fadetime new slideshow
	system("sudo sed -ri 's/^fade_time =.+$/fade_time = 3.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//enable kenburns on new slideshow
	system("sudo sed -ri 's/^KENBURNS = .+$/KENBURNS = True/' /home/pvj/pi3d_demos/PictureFrame.py");
	//start new slidshow again
	system("sudo /var/www/sync/startimagekenburn > /dev/null 2>&1");
	//system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 15s";
}

if ($_GET['action'] == 'slidetime30') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=30/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=30/' /var/www/sync/xsessionslidesusb");
	//change slidetime on new slideshow
	system("sudo sed -ri 's/^time_delay =.+$/time_delay = 30.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//change fadetime new slideshow
	system("sudo sed -ri 's/^fade_time =.+$/fade_time = 5.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//enable kenburns on new slideshow
	system("sudo sed -ri 's/^KENBURNS = .+$/KENBURNS = True/' /home/pvj/pi3d_demos/PictureFrame.py");
	//start new slidshow again
	system("sudo /var/www/sync/startimagekenburn  > /dev/null 2>&1");
	//system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 30s";
}

if ($_GET['action'] == 'slidetime60') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=60/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=60/' /var/www/sync/xsessionslidesusb");
	//change slidetime on new slideshow
	system("sudo sed -ri 's/^time_delay =.+$/time_delay = 60.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//change fadetime new slideshow
	system("sudo sed -ri 's/^fade_time =.+$/fade_time = 8.0/' /home/pvj/pi3d_demos/PictureFrame.py");
	//enable kenburns on new slideshow
	system("sudo sed -ri 's/^KENBURNS = .+$/KENBURNS = True/' /home/pvj/pi3d_demos/PictureFrame.py");
	//start new slidshow again
	system("sudo /var/www/sync/startimagekenburn  > /dev/null 2>&1");
	//system("sudo /var/www/sync/startimage > /dev/null &");	
	$outputtext =  "set slideshowtime to 60s";
}

//# PDF player

if ($_GET['action'] == 'startpdf') {
	$outputtext =  "start pdf player";
	system("sudo /var/www/sync/startpdf > /dev/null &");
}

if ($_GET['action'] == 'startpdfusb') {
	$outputtext =  "start pdf player";
	system("sudo /var/www/sync/startpdfusb > /dev/null &");
}

//# Testscreen

if ($_GET['action'] == 'testscreen') {
	system("sudo /var/www/sync/testscreen &");
        $outputtext =  "testscreen activated";
}

if ($_GET['action'] == 'testscreenoff') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
        system("sudo /var/www/sync/testscreenoff &");
	$outputtext =  "testscreen deactivated";
}

//# Audioplayer

if ($_GET['action'] == 'startaudio') {
	exec("sudo /var/www/sync/startaudio");
	$outputtext = "start audio player";
}

if ($_GET['action'] == 'startaudioslave') {
	exec("sudo /var/www/sync/startaudioslave");
	$outputtext = "start audio slave player";
}

if ($_GET['action'] == 'startaudiousb') {
	$outputtext =  "start audio player in usb mode";
	exec("sudo /var/www/startaudiousb");
}

if ($_GET['action'] == 'stopaudio') {
	$outputtext =  "stop audio player only";
	system("sudo killall -9 mpg321");
}

//# Testtone

if ($_GET['action'] == 'testtone') {
	system("sudo /var/www/sync/testtone > /dev/null &");
	//exec("sudo /var/www/sync/omxkill");
	//exec("sudo omxplayer-sync -mu /var/www/sync/testtone.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus 440 testtone";
}

if ($_GET['action'] == 'testtoneright') {
	system("sudo /var/www/sync/testtoneright > /dev/null &");
	//exec("sudo /var/www/sync/omxkill");
	//exec("sudo omxplayer-sync -mu /var/www/sync/testtone_right.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus testtone right";
}

if ($_GET['action'] == 'testtoneleft') {
	system("sudo /var/www/sync/testtoneleft > /dev/null &");
	//exec("sudo /var/www/sync/omxkill");
	//exec("sudo omxplayer-sync -mu /var/www/sync/testtone_left.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus testtone left";
}

///////////////////////////////
//# DMX OLA stuff
////////////////////////////////


if ($_GET['action'] == 'startola') {
	//exec("sudo /etc/init.d/olad start");
	exec("sudo service olad start");
	//exec("/usr/bin/olad &");
	$outputtext = "OLA started, ready on port :9090";
}

if ($_GET['action'] == 'stopola') {
	//exec("sudo /etc/init.d/olad start");
	exec("sudo killall -9 /usr/bin/olad");
	$outputtext = "OLA Daemon stoped";
}

if ($_GET['action'] == 'startoladaemon') {
	exec("sudo service olad start");
	exec("sudo update-rc.d olad enable");
	$outputtext = "OLA Daemon starts on boot, ready on port :9090";
}

if ($_GET['action'] == 'stopoladaemon') {
	exec("sudo service olad stop");
	exec("sudo update-rc.d olad disable");
	$outputtext = "disabled OLA Daemon";
}

if ($_GET['action'] == 'dmxremoteon') {
	exec("sudo killall -9 ola_trigger > /dev/null 2>&1 & echo $!");
	exec("sudo /var/www/sync/ola_trigger > /dev/null 2>&1 & echo $!");
	$outputtext = "DMX remote on Universe 15, configure in OLA!";
}

if ($_GET['action'] == 'dmxremoteoff') {
	exec("sudo killall -9 ola_trigger > /dev/null 2>&1 & echo $!");
	$outputtext = "stopped DMX remote on Universe 15";
}



////////
//# DMX 
////////

if ($_GET['action'] == 'startdmxrecord01') {
	system("sudo /var/www/sync/startdmxrecord01 > /dev/null &");
	$outputtext = "recording 01";
	}

if ($_GET['action'] == 'startdmxrecord02') {
	system("sudo /var/www/sync/startdmxrecord02 > /dev/null &");
	$outputtext = "recording 02";
	}

if ($_GET['action'] == 'startdmxrecord03') {
	system("sudo /var/www/sync/startdmxrecord03 > /dev/null &");
	$outputtext = "recording 03";
	}

if ($_GET['action'] == 'startdmxrecord04') {
	system("sudo /var/www/sync/startdmxrecord04 > /dev/null &");
	$outputtext = "recording 04";
	}

if ($_GET['action'] == 'startdmxrecord05') {
	system("sudo /var/www/sync/startdmxrecord05 > /dev/null &");
	$outputtext = "recording 05";
	}

//// dmx Playback

if ($_GET['action'] == 'startdmxplayback01') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback01 > /dev/null &");
	$outputtext = "playback show01";
}

if ($_GET['action'] == 'startdmxplayback01once') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback01once > /dev/null &");
	$outputtext = "playback show01 once";
}

if ($_GET['action'] == 'startdmxplayback02') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback02 > /dev/null &");
	$outputtext = "playback show02";
}
if ($_GET['action'] == 'startdmxplayback02once') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback02once > /dev/null &");
	$outputtext = "playback show02 once";
}

if ($_GET['action'] == 'startdmxplayback03') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback03 > /dev/null &");
	$outputtext = "playback show03";
}

if ($_GET['action'] == 'startdmxplayback04') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback04 > /dev/null &");
	$outputtext = "playback show04";
}

if ($_GET['action'] == 'startdmxplayback05') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplayback05 > /dev/null &");
	$outputtext = "playback show04";
}

//# DMX and video player

if ($_GET['action'] == 'startdmxplaybackvid01') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackvid01 > /dev/null &");
	$outputtext = "playback dmx01 and video 01_* in loop";
	}

if ($_GET['action'] == 'startdmxplaybackvid02') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackvid02 > /dev/null &");
	$outputtext = "playback dmx02 and video 02_* in loop";
	}


if ($_GET['action'] == 'startdmxplaybackvid03') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackvid03 > /dev/null &");
	$outputtext = "playback dmx03 and video 03_* in loop";
	}

if ($_GET['action'] == 'startdmxplaybackvid04') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackvid04 > /dev/null &");
	$outputtext = "playback dmx04 and video 04_* in loop";
	}
	
if ($_GET['action'] == 'startdmxplaybackvid05') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackvid05 > /dev/null &");
	$outputtext = "playback dmx05 and video 05_* in loop";
	}
			
//# DMX with audio player

if ($_GET['action'] == 'startdmxplaybackaudio01') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackaudio01 > /dev/null &");
	$outputtext = "playback dmx and audio 01_* and loop";
}

if ($_GET['action'] == 'startdmxplaybackaudio02') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackaudio02 > /dev/null &");
	$outputtext = "playback dmx and audio 02_* and loop";
}

if ($_GET['action'] == 'startdmxplaybackaudio03') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackaudio03 > /dev/null &");
	$outputtext = "playback dmx and audio 03_* and loop";
}

if ($_GET['action'] == 'startdmxplaybackaudio04') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackaudio04 > /dev/null &");
	$outputtext = "playback dmx and audio 04_* and loop";
}

if ($_GET['action'] == 'startdmxplaybackaudio05') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	exec("sudo /var/www/sync/startdmxplaybackaudio05 > /dev/null &");
	$outputtext = "playback dmx and audio 05_* and loop";
}

//# Stop DMX recorder / player

if ($_GET['action'] == 'stopdmx') {
	exec("sudo killall -9 ola_recorder");
	$outputtext = "stop dmx rec/playback";
}

if ($_GET['action'] == 'startqlcplus') {
	$outputtext =  "start QLC+";
	system("sudo /var/www/sync/startqlcplus");
}

//# DMX change universe

if ($_GET['action'] == 'changedmxuniverseshow1') {
	$outputtext =  "change show 1 to universe 1";
	system("sudo /home/pvj/changeuniverse/./changeuniverse 1 /media/internal/dmx/show01 > /media/internal/dmx/show01to1");
	//#this is a workaround since it can not prozess the own file
	system("sudo rm /media/internal/dmx/show01");
	system("sudo mv /media/internal/dmx/show01to1 /media/internal/dmx/show01");
}

if ($_GET['action'] == 'changedmxuniverseshow2') {
	$outputtext =  "change show 2 to universe 1";
	system("sudo /home/pvj/changeuniverse/./changeuniverse 1 /media/internal/dmx/show02 > /media/internal/dmx/show02to1");
	//#this is a workaround since it can not prozess the own file
	system("sudo rm /media/internal/dmx/show02");
	system("sudo mv /media/internal/dmx/show02to1 /media/internal/dmx/show02");
}

if ($_GET['action'] == 'changedmxuniverseshow3') {
	$outputtext =  "change show 3 to universe 1";
	system("sudo /home/pvj/changeuniverse/./changeuniverse 1 /media/internal/dmx/show03 > /media/internal/dmx/show03to1");
	//#this is a workaround since it can not prozess the own file
	system("sudo rm /media/internal/dmx/show03");
	system("sudo mv /media/internal/dmx/show03to1 /media/internal/dmx/show03");	
}

if ($_GET['action'] == 'changedmxuniverseshow4') {
	$outputtext =  "change show 4 to universe 1";
	system("sudo /home/pvj/changeuniverse/./changeuniverse 1 /media/internal/dmx/show04 > /media/internal/dmx/show04to1");
	//#this is a workaround since it can not prozess the own file
	system("sudo rm /media/internal/dmx/show04");
	system("sudo mv /media/internal/dmx/show04to1 /media/internal/dmx/show04");	
}

if ($_GET['action'] == 'changedmxuniverseshow5') {
	$outputtext =  "change show 5 to universe 1";
	system("sudo /home/pvj/changeuniverse/./changeuniverse 1 /media/internal/dmx/show05 > /media/internal/dmx/show05to1");
	//#this is a workaround since it can not prozess the own file
	system("sudo rm /media/internal/dmx/show05");
	system("sudo mv /media/internal/dmx/show05to1 /media/internal/dmx/show05");	
}

//////////////////
//# Midi Control
/////////////////

if ($_GET['action'] == 'startmidicontrol') {
	$outputtext =  "start Midi Control";
	system("sudo /var/www/sync/startmidicontrol");
	
}

if ($_GET['action'] == 'stopmidicontrol') {
	$outputtext =  "stop Midi Control";
	system("sudo /var/www/sync/stopmidicontrol");
	
}

if ($_GET['action'] == 'startmididaemon') {
	//system("sudo /var/www/sync/startmidicontrol");
	$outputtext =  "not implemented yet, ask marc to do so";
}

if ($_GET['action'] == 'stopmididaemon') {
	//system("sudo /var/www/sync/stopmidicontrol");
	$outputtext =  "not implemented yet, aks marc to do so";
}

//# Midi recorder/player

if ($_GET['action'] == 'stopmidirecplay') {
	$outputtext =  "stop midi record/play";
	system("sudo kill $(pgrep 'arecordmidi')");
	system("sudo kill $(pgrep 'aplaymidi')");
}

if ($_GET['action'] == 'showmidi') {
    $output = shell_exec("sudo arecordmidi -l");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'startmidirecord01') {
	$outputtext =  "start midi record";
	system("sudo /var/www/sync/startmidirecord01");
}

if ($_GET['action'] == 'startmidiplay01') {
	$outputtext =  "start midi playback";
	system("sudo /var/www/sync/startmidiplay01");
}

if ($_GET['action'] == 'startmididmxaudioplay01') {
	$outputtext =  "start midi01/dmx01/audio01";
	system("sudo /var/www/sync/startmididmxaudioplay01");
}

if ($_GET['action'] == 'startmididmxvideoplay01') {
	$outputtext =  "start midi01/dmx01/video01";
	system("sudo /var/www/sync/startmididmxvideoplay01");
}

//# Autostart behaviour

if ($_GET['action'] == 'setmaster') {
	$outputtext = "set to master video";
	system("sudo cp /var/www/sync/rc.local.master /etc/rc.local");
}

if ($_GET['action'] == 'autostartloop01') {
	$outputtext = "set to master01 loop set";
	system("sudo cp /var/www/sync/rc.local.master01 /etc/rc.local");
}

if ($_GET['action'] == 'autostartloop02') {
	$outputtext = "master02 loop set";
	system("sudo cp /var/www/sync/rc.local.master02 /etc/rc.local");
}

if ($_GET['action'] == 'setslave') {
	$outputtext =  "set to slave video";
	system("sudo cp /var/www/sync/rc.local.slave /etc/rc.local");
}

if ($_GET['action'] == 'setslaveonce') {
	$outputtext =  "set to slaveonce";
	system("sudo cp /var/www/sync/rc.local.slaveonce /etc/rc.local");
}

if ($_GET['action'] == 'setmasterusb') {
	$outputtext =  "set to master usb";
	system("sudo cp /var/www/sync/rc.local.usb /etc/rc.local");
}

if ($_GET['action'] == 'setimage') {
	$outputtext =  "set to slideshow";
	system("sudo cp /var/www/sync/rc.local.image /etc/rc.local");
}

if ($_GET['action'] == 'setimageusb') {
	$outputtext =  "set slideshow usb";
	system("sudo cp /var/www/sync/rc.local.imageusb /etc/rc.local");
}

if ($_GET['action'] == 'setimagekenburn') {
	$outputtext =  "set to slideshow kenburns effect";
	system("sudo cp /var/www/sync/rc.local.kenburn /etc/rc.local");
}


if ($_GET['action'] == 'setaudio') {
	$outputtext =  "autostart audio set";
	system("sudo cp /var/www/sync/rc.local.audio /etc/rc.local");
}

if ($_GET['action'] == 'setaudiousb') {
	$outputtext =  "autostart audio usb set";
	system("sudo cp /var/www/sync/rc.local.audiousb /etc/rc.local");
}

if ($_GET['action'] == 'screenshare') {
	$outputtext =  "set to screenshare mode";
	//system("sudo cp /var/www/sync/vncstartup /home/pvj/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.screenshare /etc/rc.local");
}

if ($_GET['action'] == 'setmapper') {
	$outputtext =  "set to mapping mode";
	system("sudo cp /var/www/sync/rc.local.mapper /etc/rc.local");
}

if ($_GET['action'] == 'setmapperfbo') {
	$outputtext =  "set to mapping slideshow mode";
	system("sudo cp /var/www/sync/rc.local.mapperfbo /etc/rc.local");
}

if ($_GET['action'] == 'setmappercam') {
	$outputtext =  "set to mapping with cam";
	system("sudo cp /var/www/sync/rc.local.mappercam /etc/rc.local");
}

if ($_GET['action'] == 'setqlc') {
	$outputtext =  "set to QLC+ DMX console";
	system("sudo cp /var/www/sync/xsessionqlcplus /home/pvj/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.qlcplus /etc/rc.local");
}

if ($_GET['action'] == 'setpd') {
	$outputtext =  "set to puredata";
	system("sudo cp /var/www/sync/xsessionpd /home/pvj/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.pd /etc/rc.local");
}

if ($_GET['action'] == 'powerpoint') {
	$outputtext =  "set to presentationmode";
	system("sudo cp /var/www/sync/xsessionppt /home/pvj/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.impress /etc/rc.local");
}

if ($_GET['action'] == 'setimagemanual') {
	$outputtext =  "set to manual imageplayer";
	system("sudo cp /var/www/sync/rc.local.imagemanual /etc/rc.local");
}

if ($_GET['action'] == 'setpdf') {
	$outputtext =  "set to pdf";
	system("sudo cp /var/www/sync/rc.local.pdf /etc/rc.local");
}

if ($_GET['action'] == 'setsyphon') {
	$outputtext =  "set to TCPSClient";
	system("sudo cp /var/www/sync/rc.local.syphon /etc/rc.local");
}

if ($_GET['action'] == 'autostartclock') {
	$outputtext =  "set to autostart with clock display";
	system("sudo cp /var/www/sync/rc.local.clock /etc/rc.local");
}

if ($_GET['action'] == 'custom1') {
	$outputtext = "set autostart custom1";
	system("sudo cp /var/www/sync/rc.local.custom /etc/rc.local");
}

if ($_GET['action'] == 'setfugio') {
	$outputtext = "set autostart Fugio";
	system("sudo cp /var/www/sync/rc.local.fugio /etc/rc.local");
}

if ($_GET['action'] == 'custom') {
	$outputtext = "set autostart custom1";
	system("sudo cp /var/www/sync/rc.local.custom /etc/rc.local");
}

if ($_GET['action'] == 'setprocessing') {
	$outputtext = "autostart processing";
	system("sudo cp /var/www/sync/rc.local.processing /etc/rc.local");
}

if ($_GET['action'] == 'setosc') {
	$outputtext = "autostart to OSC/DMX/ArtNet receiver";
	system("sudo cp /var/www/sync/rc.local.osc /etc/rc.local");
}

if ($_GET['action'] == 'setbeacon') {
	$outputtext = "autostart to Bluetooth Beacon";
	system("sudo cp /var/www/sync/rc.local.beacon /etc/rc.local");
}

if ($_GET['action'] == 'setbeaconnogpu') {
	$outputtext = "autostart to Bluetooth Beacon GPU/screen deactivated";
	system("sudo cp /var/www/sync/rc.local.beaconnogpu /etc/rc.local");
}

if ($_GET['action'] == 'setbuttonbeacon') {
	$outputtext = "autostart to Bluetooth Beacon & Buttons";
	system("sudo cp /var/www/sync/rc.local.setbuttonbeacon  /etc/rc.local");
}

if ($_GET['action'] == 'setbutton1') {
	$outputtext = "autostart to button script";
	system("sudo cp /var/www/sync/rc.local.button /etc/rc.local");
}

if ($_GET['action'] == 'setmasterdmx01') {
	system("sudo cp /var/www/sync/rc.local.dmx01 /etc/rc.local");
	$outputtext = "autostart to videomaster & dmx 01";
}

if ($_GET['action'] == 'setmasterdmx') {
	system("sudo cp /var/www/sync/rc.local.dmx /etc/rc.local");
	$outputtext = "autostart videomaster & autostart qlc+ headless playing";
}

if ($_GET['action'] == 'autostartmidi') {
	system("sudo cp /var/www/sync/rc.local.midi /etc/rc.local");
	$outputtext = "autostart to midi listener";
}

if ($_GET['action'] == 'setwebcam') {
	system("sudo cp /var/www/sync/rc.local.webcam /etc/rc.local");
	$outputtext = "autostart to webcam";
}

if ($_GET['action'] == 'setpir1') {
	system("sudo cp /var/www/sync/rc.local.pir /etc/rc.local");
	$outputtext = "autostart to PIR Motion";
}


if ($_GET['action'] == 'autostartdmx01') {
	system("sudo cp /var/www/sync/rc.local.dmx01 /etc/rc.local");
	$outputtext = "autostart to DMX01";
}

if ($_GET['action'] == 'autostartdmxvid01') {
	system("sudo cp /var/www/sync/rc.local.dmxvid01 /etc/rc.local");
	$outputtext = "autostart to DMX01 & Video 01";
}

if ($_GET['action'] == 'autostartdmxaud01') {
	system("sudo cp /var/www/sync/rc.local.dmxaud01 /etc/rc.local");
	$outputtext = "autostart to DMX01 & Audio 01";
}


if ($_GET['action'] == 'autostartcountdown') {
	system("sudo cp /var/www/sync/rc.local.countdown /etc/rc.local");
	$outputtext = "autostart to countdown";
}


//# Display IP

if ($_GET['action'] == 'ipwifi') {
    $output = shell_exec("sudo /sbin/ifconfig -a wlan0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'iplan') {
    $output = shell_exec("sudo /sbin/ifconfig -a eth0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

//# Set Boot.conf resolution and try to force resolution without reboot

if ($_GET['action'] == 'bootconf') {
	$outputtext =  "custom boot conf to boot";
	system("sudo cp /media/internal/config.txt /boot/config.txt");
}

if ($_GET['action'] == 'bootconfusb') {
	$outputtext =  "custom boot conf from usb to boot";
	system("sudo cp /media/usb/config.txt /boot/config.txt");
}

if ($_GET['action'] == 'hdmireset') {
	$outputtext =  "reset resolution settings, needs reboot!";
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
}

if ($_GET['action'] == 'hdmi1') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/forcehdmi1 /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'DMT 16 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 1024 768 1024 768 32");
	$outputtext =  "forced to use 1024x768";	
}

if ($_GET['action'] == 'hdmi4') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/forcehdmi4 /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'CEA 19 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 1280 720 1280 720 32");
	$outputtext =  "forced to use hdmi 1280x720";
}

if ($_GET['action'] == 'hdmi5') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/forcehdmi5 /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'CEA 31 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 1920 1080 1920 1080 32");
	$outputtext =  "forced to 1920x1080";
}

if ($_GET['action'] == 'hdmi6') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/forcehdmi6 /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'DMT 28 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 1280 800 1280 800 32");
	$outputtext =  "forced to 1280x800";
}

if ($_GET['action'] == 'forcevga') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/forcevga /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'DMT 9 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 800 600 800 600 32");
	$outputtext =  "force 800x600";
}

if ($_GET['action'] == 'force1680') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/force1680 /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'DMT 58 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 1680 1050 1680 1050 32");
	$outputtext =  "force 1680 x 1050 rgb";
}

if ($_GET['action'] == 'force1200') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/force1200 /boot/config.txt");
	system("sudo tvservice --off");
	system("sudo tvservice -e 'DMT 51 DVI'");
	system("sudo chvt 2");
	system("sudo chvt 1");
	system("sudo fbset -g 1920 1200 1920 1200 32");
	$outputtext =  "forced to 1920 x 1200 rgb";
}

if ($_GET['action'] == 'analog1') {
	$outputtext =  "force RCA PAL output, needs reboot";
	system("sudo cp /var/www/sync/analog1 /boot/config.txt");
}

if ($_GET['action'] == 'analog2') {
	$outputtext =  "force RCA NTSC output, needs reboot";
	system("sudo cp /var/www/sync/analog2 /boot/config.txt");
}

if ($_GET['action'] == 'clean') {
	$outputtext =  "clean hidden files";
	system("sudo rm -R /media/internal/.[DTf_]*");
	system("sudo rm -R /media/internal/__MACOSX");
	system("sudo rm -R /media/internal/video/.[DTf_]*");
	system("sudo rm -R /media/internal/video/__MACOSX");
	system("sudo rm -R /media/internal/images/.[DTf_]*");
	system("sudo rm -R /media/internal/images/__MACOSX");
	system("sudo rm -R /media/internal/audio/.[DTf_]*");
	system("sudo rm -R /media/internal/audio/__MACOSX");
//# also files on usb sticks
	system("sudo rm -R /media/usb/.[DTf_]*");
	system("sudo rm -R /media/usb/__MACOSX");
	system("sudo rm -Rf /media/usb/.Spotlight-V100/");

}

if ($_GET['action'] == 'screenon') {
	$outputtext = shell_exec('sudo /opt/vc/bin/tvservice -p');
}

if ($_GET['action'] == 'screenoff') {
	$outputtext = shell_exec('sudo /opt/vc/bin/tvservice -o');
}

//# Set Boot.conf resolution rotate screen

if ($_GET['action'] == 'rotate0') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0/' /boot/config.txt");
	$outputtext =  "Display Rotation = Normal, needs reboot";
}

if ($_GET['action'] == 'rotate1') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=1/' /boot/config.txt");
	$outputtext =  "Display Rotation = 90°, needs reboot";
}

if ($_GET['action'] == 'rotate2') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=2/' /boot/config.txt");
	$outputtext =  "Display Rotation = 180°, needs reboot";
}

if ($_GET['action'] == 'rotate3') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=3/' /boot/config.txt");
	$outputtext =  "Display Rotation = 270°, needs reboot";
}

if ($_GET['action'] == 'flip1') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0x10000/' /boot/config.txt");
	$outputtext =  "Display Flip Horizontally, needs reboot";
}

if ($_GET['action'] == 'flip2') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0x20000/' /boot/config.txt");
	$outputtext =  "Display Flip Vertically, needs reboot";
}


//Hyperion

if ($_GET['action'] == 'hyperionenable') {
	//there is something wrong with the service script, but it works
	system("sudo cp /var/www/sync/hyperion.service /lib/systemd/system/hyperion.service");
	system("sudo systemctl daemon-reload");
	system("sudo systemctl start hyperion.service");
	system("sudo systemctl enable hyperion.service");
	//enable also in boot/config.txt
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /boot/config.txt");
	//enable in all resolution scripts
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /var/www/sync/defaulthdmi");
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /var/www/sync/forcehdmi1");
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /var/www/sync/forcehdmi2");
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /var/www/sync/forcehdmi4");
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /var/www/sync/forcehdmi5");
	system("sudo sed -ri 's/^#dtparam=spi=.+$/dtparam=spi=on/' /var/www/sync/forcehdmi6");
	//set audio to hdmi (or alsa)
	system("sudo /var/www/sync/setaudio_hdmi");
	$outputtext =  "enable hyperion led, reboot!!";
}

if ($_GET['action'] == 'hyperiondisable') {
	$outputtext =  "disable hyperion led";
	//there is something wrong with the service, but it works like this:
	system("sudo systemctl stop hyperion@root.service");
	system("sudo systemctl stop hyperion.service");
	system("sudo systemctl disable hyperion.service");
	system("sudo systemctl disable hyperion@.service");
	system("sudo systemctl stop hyperion.service");
	system("sudo rm -rf /lib/systemd/system/hyperion.service");
	system("sudo systemctl daemon-reload");
	//disable also in boot/config.txt
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /boot/config.txt");
	//disable in all resolution scripts
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /var/www/sync/defaulthdmi");
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /var/www/sync/forcehdmi1");
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /var/www/sync/forcehdmi2");
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /var/www/sync/forcehdmi4");
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /var/www/sync/forcehdmi5");
	system("sudo sed -ri 's/^dtparam=spi=.+$/#dtparam=spi=on/' /var/www/sync/forcehdmi6");
}

//# Display Info

if ($_GET['action'] == 'getresolution') {
	$output = shell_exec('sudo tvservice -s');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 50, "<br />\n");
}

if ($_GET['action'] == 'resolutionquery_dmt') {
    //$output = shell_exec('sudo tvservice -d edid.dat');
	//$output = shell_exec('sudo edidparser edid.dat');
	$output = shell_exec('sudo /opt/vc/bin/tvservice -m DMT');
	$outputtext = "<pre>$output</pre>";
}

if ($_GET['action'] == 'resolutionquery_cea') {
	$output = shell_exec('sudo /opt/vc/bin/tvservice -m CEA');
	$outputtext = "<pre>$output</pre>";
}

if ($_GET['action'] == 'codecinfo') {
	$output = shell_exec('mediainfo --Inform="General;%FileName% \n Format: %Format% Codec: %CodecID% Bitrate: %OverallBitRate% \\n \\n" /media/internal/video/*');
	$outputtext = "<pre>$output</pre>";
}


if ($_GET['action'] == 'movieinfo') {
	//$output = shell_exec("mediainfo --Output=$'General;File=%FileName%\\nDuration=%Duration/String3%\\nFile size=%FileSize/String1% \nVideo;Resolution=%Width%x%Height%\\nCodec=%CodecID%\\n\\n' /media/internal/video/*");
	$output = shell_exec('mediainfo /media/internal/video/* | egrep "(name|Width|Height)"');
	$outputtext = "<pre>$output</pre>";
}

if ($_GET['action'] == 'diskspace') {
	$output = shell_exec('df -h --output=size --output=used --output=avail /media');
    $outputtext = "<pre>$output</pre>";
}




//////////////////
/// File Handling
//////////////////

if ($_GET['action'] == 'defaultelfinder') {
	system ("sudo /var/www/sync/set_elfinder");
		//this is to disable filebrowser daemon
	//system ("sudo systemctl stop filebrowser.service");
	//system ("sudo systemctl disable filebrowser.service");
	$outputtext =  "elFinder default";
}

if ($_GET['action'] == 'defaultextplorer') {
	system ("sudo /var/www/sync/set_extplorer");
	//this is to disable filebrowser daemon
	//system ("sudo systemctl stop filebrowser.service");
	//system ("sudo systemctl disable filebrowser.service");
	$outputtext =  "eXtplorer default";
}

if ($_GET['action'] == 'defaultfilebrowser') {
	system ("sudo /var/www/sync/set_filebrowser");
	$outputtext =  "filebrowser default";
}

if ($_GET['action'] == 'openfilebrowser') {
	system ("sudo systemctl start filebrowser.service");
	$outputtext =  "filebrowser open";
}

// get webcontent
if ($_GET['action'] == 'getcontent') {
	system ("sudo /var/www/sync/getcontent");
	system ("sudo chmod 777 /media/internal/video/*");
	$outputtext =  "content from your defined websource downloaded";
}

//# filename fixer
if ($_GET['action'] == 'namefixer') {
	system("sudo /var/www/sync/./namefixer > /dev/null 2>&1");
        $outputtext =  "fixed all filenames";
}

//# permission fixer
if ($_GET['action'] == 'permissionfixer') {
	system("sudo chmod 777 -R /media");
	$outputtext =  "fixed permissions";
}


//# USB Stick mount

if ($_GET['action'] == 'reboot') {
	$outputtext =  "rebooting now!";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo reboot");
}

if ($_GET['action'] == 'shutdown') {
	$outputtext =  "shutting down";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo poweroff");
}

if ($_GET['action'] == 'eject') {
	$outputtext =  "usb stick unmounted";
	system("sudo umount /dev/sda");
	system("sudo umount /dev/sda1");
	system("sudo umount /dev/sda2");
}

if ($_GET['action'] == 'mount') {
	$outputtext =  "usb stick mounted";
	system("sudo mount /dev/sda /media/usb/");		
	system("sudo mount /dev/sda1 /media/usb/");	
	system("sudo mount /dev/sda2 /media/usb/");
}



//////////////////////////////////
//# Update & Firmmare Stuff
//////////////////////////////////

//#This updates all mapper
if ($_GET['action'] == 'mapperupdate') {
	$outputtext =  "update all mapper";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo rm -r /home/pvj/openFrameworks/addons/ofxPiMapper/");
	system("sudo unzip /var/www/sync/mapper_all_jack.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pvj/openFrameworks/addons/ofxPiMapper/example_basic/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pvj/openFrameworks/addons/ofxPiMapper/example_basic/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pvj/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pvj/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");
}

//#This updates all mapper, puts the audio out to hdmi
if ($_GET['action'] == 'mapperupdatehdmi') {
	$outputtext =  "update mapper hdmi";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo rm -r /home/pvj/openFrameworks/addons/ofxPiMapper/");
	system("sudo unzip /var/www/sync/mapper_all_hdmi.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pvj/openFrameworks/addons/ofxPiMapper/example_basic/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pvj/openFrameworks/addons/ofxPiMapper/example_basic/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pvj/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pvj/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");
}


if ($_GET['action'] == 'updateall') {
	//update all script
	//stop everything
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	// chmod everything, not sure if this is need when update does not work
	system("sudo chmod 755 -R /var/www/");
	//Update CP
	system("sudo unzip /media/internal/PocketVJ-CP-exh.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-exh/* /var/www/");
	system("sudo chmod 755 -R /var/www/");
	system("sudo rm -rf /media/internal/PocketVJ-CP-exh.zip");
	system("sudo rm -rf /media/internal/PocketVJ-CP-exh");
	$outputtext = shell_exec('sudo /var/www/sync/updateall');
}

if ($_GET['action'] == 'factoryreset') {
	$outputtext =  "factory reset system";
	//stop all
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	//copy omxplayer -sync scripts
	system("sudo cp /var/www/sync/omxplayer-sync /usr/bin/omxplayer-sync");
	system("sudo cp /var/www/sync/omxplayer-sync-old /usr/bin/omxplayer-sync-old");
	system ("sudo cp /var/www/sync/omxplayer-sync-wifi /usr/bin/omxplayer-sync-wifi");
	//reset screen
    system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
  	system("sudo cp /var/www/sync/rc.local.master /etc/rc.local");
  	system("sudo cp /var/www/sync/dbuscontrol.sh /usr/bin/dbuscontrol.sh");
 	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
	system("sudo /var/www/sync/./namefixer > /dev/null 2>&1");
	//fix permissions  
	system("sudo chmod +rx /usr/bin/dbuscontrol.sh");
	system("sudo chmod +x /var/www/sync/launchmapper");
	system("sudo chmod 755 -R /var/www");
	system("sudo chmod 777 -R /media");
	//Update OSC control in home folder
	system("sudo cp /var/www/sync/osc_control.js /home/pvj/osc/osc_control.js");
	//remove .xsession file
	system("sudo rm -rf /home/pvj/.xsession");
	//remove lost&found files
	system ("rm -rf /media/lost+found/");
	// fix the iptables rules
	system("sudo cp /var/www/sync/iptables.ipv4.nat /etc/iptables.ipv4.nat");
	//copy the artnet conf set to broadcast
	system("sudo cp /var/www/sync/ola-artnet.conf /var/lib/ola/conf/ola-artnet.conf");
	//set slidetime to 5 seconds
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>5</SlideDuration>@' /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/magslideshow_settings.xml");
	//disable ola daemon
	exec("sudo service olad stop");
	//check if this is still relevant for stopping
	exec("sudo update-rc.d olad disable");
	exec("sudo killall -9 /usr/bin/olad");
	//disable buttons
	system("sudo /var/www/sync/stopbuttons");
	//disable camera
	system("sudo sed -ri 's/^start_x=.+$/start_x=0/' /boot/config.txt");
	//set audio to jack and hdmi
	system("sudo /var/www/sync/setaudio_jack");
	//set alsa volume to 100
	system("sudo /var/www/sync/audioboost");
	//system("sudo su - pvj -c 'amixer set Master 100%'");
	//system("sudo su - pvj -c /usr/bin/amixer set 'PCM' 100%");
	//system("sudo alsactl store");
	//system("sudo rm -rf /tmp/*");
	//system("sudo rm -rf /var/log/*");
	//system("sudo rm -rf /var/tmp/*");
	//system("sudo apt-get clean");
	//set ip on network scripts to match pvj current ip
	system("sudo /var/www/sync/iprangeUpdatecall");
	//fix the pjlink to new version
	//create folder if not already present
	system("sudo mkdir /home/pvj/.local/share/pjlink");
	//copy standard pjlink config file:
	system("sudo cp /var/www/sync/pjlink.conf /home/pvj/.local/share/pjlink/pjlink.conf");
	// disable lirc service
	system("sudo systemctl stop lircd");
	system("sudo systemctl disable lircd");
	system("sudo systemctl disable lircd.socket");
	system("sudo systemctl disable lircmd.service");
	system("sudo systemctl disable lircd-setup.service");
	system("sudo systemctl disable lircd-uinput.service");
	system("sudo systemctl stop irexec.service");
	system("sudo systemctl disable irexec.service");
	//disable beacon delay
	system("sudo /var/www/sync/stopbeacon");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce04b");
	// Disable logging
	system("sudo service rsyslog stop");
    system("sudo systemctl disable rsyslog");
}

// rental reset
if ($_GET['action'] == 'rentalreset') {
	//$outputtext =  "renthalreset reset system, removed content!";
	//stoppall
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	////////////////
	$output = shell_exec('sudo /var/www/sync/rentalreset');
	//////to do:
	// set to default filebrowser!!!
	$outputtext =  "Rental reset done";
}

if ($_GET['action'] == 'installpygame') {
	$outputtext =  "Install pygame";
	system("sudo apt-get install -f /var/www/sync/debs/python3-pygame_1.9.3+dfsg-2_armhf.deb -y");
	system("sudo apt-get install -f /var/www/sync/debs/python-pygame_1.9.3+dfsg-2_armhf.deb -y");
	//system("sudo apt-get install -f /var/www/sync/debs/python-socketio_0.3.6-4_all.deb -y");
	//system("sudo apt-get install -f /var/www/sync/debs/python-eventlet_0.19.0-6_all.deb -y");
	//for python2:
	system("sudo apt-get install -f /var/www/sync/debs/python-zmq_16.0.2-2_armhf.deb -y");
	//for python3:
	//system("sudo pip3 install /var/www/sync/debs/pyzmq-20.0.0-cp35-cp35m-linux_armv7l.whl");
	$outputtext = "installed pygame + zmq";
}

if ($_GET['action'] == 'installbluetooth') {
	$outputtext =  "Install bluetooth support";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo apt-get install -y /var/www/sync/debs/rfkill_0.5-1_armhf.deb");
	system("sudo apt-get install -y /var/www/sync/debs/raspberrypi-sys-mods_20181127_armhf.deb");
	system("sudo apt-get install -y /var/www/sync/debs/bluez-firmware_1.2-3+rpt7_all.deb");
	system("sudo apt-get install -y /var/www/sync/debs/pi-bluetooth_0.1.10_all.deb");
	system("sudo apt-get install -y /var/www/sync/debs/libbluetooth3_5.43-2+rpt2+deb9u2_armhf.deb");
	system("sudo apt-get install -y /var/www/sync/debs/libbluetooth-dev_5.43-2+rpt2+deb9u2_armhf.deb");
	system("sudo pip3 install /var/www/sync/debs/beacontools-2.1.0-py2.py3-none-any.whl /var/www/sync/debs/ahocorapy-1.6.1-py2.py3-none-any.whl /var/www/sync/debs/construct-2.10.54-py3-none-any.whl /var/www/sync/debs/future-0.18.2-py3-none-any.whl");
	system("sudo pip3 install /var/www/sync/debs/PyBluez-0.23-cp35-cp35m-linux_armv7l.whl");
	system("sudo pip3 install /var/www/sync/debs/enum34-1.1.10-py3-none-any.whl /var/www/sync/debs/PyBeacon-0.3.0.0-py2.py3-none-any.whl");
	$outputtext = "installed bluetooth";
}

if ($_GET['action'] == 'removebluetooth') {
	$outputtext =  "remove bluetooth support";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system(" sudo apt-get purge -y bluez-firmware bluez");
	$outputtext = "removed bluetooth";
}

if ($_GET['action'] == 'installhyperion') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	#system("sudo  /var/www/sync/hyperioninstall");
	$output = shell_exec('sudo  /var/www/sync/hyperioninstall');
	
	//her we must be shure that boot config gets updated
	//sed the command and cp the default resolution
	$outputtext = "installed hyperion";
}



if ($_GET['action'] == 'updatekernel') {
	$outputtext =  "Kernel to RT Kernel, untested yet!";
	system("sudo cp /var/www/sync/raspberrypi4-linux-4.19.65-rt24-v7l+-usb-lowlatency.tar.gz /raspberrypi4-linux-4.19.65-rt24-v7l+-usb-lowlatency.tar.gz");
	system("sudo tar -xzf /raspberrypi4-linux-4.19.65-rt24-v7l+-usb-lowlatency.tar.gz");
	system("sudo reboot");

	//$outputtext =  "Update Kernel to 5.x";
	//system("sudo cp /var/www/sync/raspberrypi4-linux-4.19.65-rt24-v7l+-usb-lowlatency.tar.gz /raspberrypi4-linux-4.19.65-rt24-v7l+-usb-lowlatency.tar.gz");
	//system("sudo tar -xzf /raspberrypi4-linux-4.19.65-rt24-v7l+-usb-lowlatency.tar.gz");
	//system("sudo reboot");
}

if ($_GET['action'] == 'updateola') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	//stop ola before update
	exec("sudo service olad stop");
	exec("sudo update-rc.d olad disable");
    exec("sudo killall -9 /usr/bin/olad");
	$outputtext = system("sudo /var/www/sync/updateola");
	//$outputtext =  "Updates ola";
}

//# Set Wifi Channel

if ($_GET['action'] == 'setwifi1') {
	$outputtext =  "wifi channel 1";
	system("sudo sed -ri 's/^channel=.+$/channel=1/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi3') {
	$outputtext =  "wifi channel 3";
	system("sudo sed -ri 's/^channel=.+$/channel=3/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi4') {
	$outputtext =  "wifi channel 4";
	system("sudo sed -ri 's/^channel=.+$/channel=4/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi6') {
	$outputtext =  "wifi channel 6";
	system("sudo sed -ri 's/^channel=.+$/channel=6/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi9') {
	$outputtext =  "wifi channel 9";
	system("sudo sed -ri 's/^channel=.+$/channel=9/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi11') {
	$outputtext =  "wifi channel 11";
	system("sudo sed -ri 's/^channel=.+$/channel=11/' /etc/hostapd/hostapd.conf");
}

//# Wifi

if ($_GET['action'] == 'wifiup') {
	$outputtext =  "wifi on";
	system("ifconfig wlan0 up");
}

if ($_GET['action'] == 'wifidown') {
	$outputtext =  "wifi off";
	system("sudo ifconfig wlan0 down");
}

//# Wifi Connect/Test

if ($_GET['action'] == 'wifitest') {
	//run it in a script for cleaner code
	system("sudo /var/www/sync/wifitest");
	$outputtext =  "test wifi connecting";
}

if ($_GET['action'] == 'wifipermanent') {
	// sudo systemctl disable hostapd.service /may its working without disbale, since how to enable?
	system("sudo cp /etc/network/interfaces /var/www/sync/interfaces.bak");
	system("sudo cp /var/www/sync/interfaceswifidhcp /etc/network/interfaces");
	//set the dhcp wifi file with denyinterfaces wlan0 autcommented!!
	system("sudo cp /var/www/sync/dhcpcdwifi.conf /etc/dhcpcd.conf");
	$outputtext =  "set wifi connection permanent";
	//system("sudo ifconfig wlan0 down");
}

if ($_GET['action'] == 'wifirevert') {
	// sudo systemctl enable hostapd.service /may its working without disbale, since how to enable?
	system("sudo cp /var/www/sync/interfaces.static /etc/network/interfaces");
	//copy back dhcpd file
	system("sudo cp /var/www/sync/dhcpcd.conf  /etc/dhcpcd.conf");
	$outputtext =  "wifi back to access point mode";
	//system("sudo ifconfig wlan0 down");
}


if ($_GET['action'] == 'showwifi') {
	$output = shell_exec('sudo iwlist wlan0 scan | grep ESSID');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'connectedtowifi') {
	$output = shell_exec('sudo iwconfig 2>&1 | grep ESSID');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 100, "<br />\n");
}

//# Disable Wifi & Bluetooth
//this needs rework, new we have dt overlays to handle this
if ($_GET['action'] == 'wifidisable') {
	$outputtext =  "wifi&bluetooth permanent off";
	system("sudo cp /var/www/sync/raspi-blacklist.conf /etc/modprobe.d/raspi-blacklist.conf");
}

if ($_GET['action'] == 'wifienable') {
	$outputtext =  "wifi&bluetooth permanent on";
	system("sudo cp /var/www/sync/raspi-blacklist.empty /etc/modprobe.d/raspi-blacklist.conf");
}

////////////
//# Audio//
///////////

if ($_GET['action'] == 'volume_up') {
	//system("sudo su - pvj -c 'amixer set Master 100%'");
	//system("sudo su - pvj -c '/usr/bin/amixer set PCM 100%'");
	//system("sudo alsactl store");
	system("sudo /var/www/sync/audioboost");
	$outputtext =  "<pre>$output</pre>";
}

if ($_GET['action'] == 'volume_down') {
	system("sudo su - pvj -c 'amixer set Master 10%-'");
	$outputtext =  "<pre>$output</pre>";
}

if ($_GET['action'] == 'hdmi_out') {
	//system("sudo /var/www/sync/setaudio_hdmi");
	$outputtext = shell_exec("sudo /var/www/sync/setaudio_hdmi");
	$outputtext =  "Audio set to HDMI";
}

if ($_GET['action'] == 'jack_out') {
	system("sudo /var/www/sync/setaudio_jack");
	$outputtext =  "Audio set to Jack";
}

if ($_GET['action'] == 'both_out') {
	system("sudo /var/www/sync/setaudio_both");
	$outputtext =  "Audio set to both (remember: its bad quality!!)";
}

if ($_GET['action'] == 'alsa_out') {
	system("sudo /var/www/sync/setaudio_alsa");
	$outputtext =  "Audio set to alsa:hw:1,0";
}

if ($_GET['action'] == 'bluetooth_out') {
	//system("sudo /var/www/sync/setaudio_bluetooth");
	$outputtext =  "WIP, not ready yet...Audio set to bluetooth";
}

////////////////////////////////////
//# Audio Bluetooth connection kit//
///////////////////////////////////

if ($_GET['action'] == 'bluetooth_scan') {
	//$output = shell_exec('sudo hcitool scan');
	$outputtext = shell_exec('sudo /var/www/sync/bluetooth_scan.sh');
	//this is used to bring output with linebreaks ;)
    //$outputtext = "<pre>$output</pre>";
}

if ($_GET['action'] == 'bluetooth_pair') {
	$output = shell_exec('/var/www/sync/bluetooth_pair.sh');
    $outputtext = "<pre>$output</pre>";
}


///////////////////////////////////
//# conform images to hd
///////////////////////////////////

if ($_GET['action'] == 'imageconform') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	//# this converts all to jpg
	system("sudo mogrify -format jpg /media/internal/images/*.png");
	system("sudo mogrify -format jpg /media/internal/images/*.tiff");
	system("sudo mogrify -format jpg /media/internal/images/*.tif");
	system("sudo mogrify -format jpg /media/internal/images/*.jpeg");
	system("sudo mogrify -format jpg /media/internal/images/*.bmp");
	system("sudo mogrify -format jpg /media/internal/images/*.gif");
    //# this removes the original files
	system("sudo rm /media/internal/images/*.png");
	system("sudo rm /media/internal/images/*.tiff");
	system("sudo rm /media/internal/images/*.tif");
	system("sudo rm /media/internal/images/*.jpeg");
	system("sudo rm /media/internal/images/*.bmp");
	system("sudo rm /media/internal/images/*.gif");
    //# this resizes all files
	system("sudo mogrify -resize 1920x1080\> /media/internal/images/*.jpg");
	$outputtext =  "FINISHED! all images converted to jpg and resized to HD";
}

//# convert exported .svg from madmapper and mapio to mappersettings

if ($_GET['action'] == 'mappingconverter') {
	system("sudo /var/www/sync/mappingconverter");
	$outputtext = "convert convert.svg to mappersetting1";
}
//////////////
// Scheduler//
//////////////


if ($_GET['action'] == 'setscheduler') {
	$outputtext = "autostart into scheduler mode";
	system("sudo cp /var/www/sync/rc.local.scheduler /etc/rc.local");
}

if ($_GET['action'] == 'gettime') {
    $output = shell_exec('date');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'timeron') {
	//fix ^M Carriage Return
	shell_exec("sudo sed -i 's/\r$//g' /media/internal/timer.txt");
	shell_exec("sudo -u root crontab /media/internal/timer.txt");
	//$preoutputtext =  "<pre>$output</pre>";
	//system("sudo service cron restart");
	//system("sudo /etc/init.d/cron restart");
	//$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
	$outputtext =  "enable scheduler, TIMER ON";
}

if ($_GET['action'] == 'timeroff') {
	$outputtext =  "disable scheduler, NO TIMER";
	system("sudo crontab -r");
	system("sudo -u root crontab -r");
	system("sudo -u pvj crontab -r");

}

if ($_GET['action'] == 'timer') {
    $output = shell_exec('sudo -u root crontab -l | grep -v "^$\|^\s*\#"');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 120, "<br />\n");
}

//////
// Countdown
////////

if ($_GET['action'] == 'startcountdown') {
	$outputtext =  "Countdown started";
	//system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo /var/www/sync/startcountdown");
}


//# Clock Display


//if ($_GET['action'] == 'clockdisplay2') {
	//$outputtext =  "display time onscreen";
///	system("watch -t -n1 "date +%A%n%x%n%X|figlet -t -c " > /dev/tty1");
//}

if ($_GET['action'] == 'clockdisplay') {
	$outputtext =  "display time onscreen";
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockred') {
	$outputtext =  "clock color red";
	//system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=1/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockgreen') {
	$outputtext =  "clock color green";
	//system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=2/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockorange') {
	$outputtext =  "clock color orange";
	//system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=3/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockpink') {
	$outputtext =  "clock color pink";
	//system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=5/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'fixclock') {
	system ("sudo /var/www/sync/stopall");
	system("sudo apt-get -y remove fake-hwclock");
	system("sudo update-rc.d -f fake-hwclock remove");
	system("sudo systemctl disable fake-hwclock");
	system("sudo rm /lib/udev/hwclock-set");
	system("sudo cp /var/www/sync/hwclock-set /lib/udev/hwclock-set");
	$outputtext =  "clock fixed";
}

//////////////////////
// Mapping
/////////////////////

if ($_GET['action'] == 'relaunchmapper') {
	$outputtext =  "mapper relaunched";
	system("sudo /var/www/sync/relaunchmapper > /dev/null 2>&1");
}

if ($_GET['action'] == 'launchmapper') {
	$outputtext =  "mapper launched";
	system("sudo /var/www/sync/launchmapper > /dev/null 2>&1");
}

if ($_GET['action'] == 'launchmappercam') {
	$outputtext =  "mapper cam launched";
	system("sudo /var/www/sync/launchmappercam > /dev/null 2>&1");
}

if ($_GET['action'] == 'launchmapperfbo') {
	$outputtext =  "PiMapper Slideshow launched";
	system("sudo /var/www/sync/launchmapperfbo > /dev/null 2>&1");
}

if ($_GET['action'] == 'launchmapperremote') {
	$outputtext =  "mapper remote(beta), needs an app";
	system("sudo /var/www/sync/launchmapperremote > /dev/null 2>&1");
}

if ($_GET['action'] == 'mapperplaymode') {
	$outputtext =  "presentation mode";
	system("sudo /var/www/sync/mapper1");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappertexturemode') {
	$outputtext =  "select input mesh";
	system("sudo /var/www/sync/mapper2");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermappingmode') {
	$outputtext =  "mapping mode";
	system("sudo /var/www/sync/mapper3");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermediaselect') {
	$outputtext =  "select input mesh, first select grid";
	system("sudo /var/www/sync/mapper4");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperpanel') {
	$outputtext =  "show/hide layer panel";
	system("sudo /var/www/sync/mappery");
	system("killall -9 /opt/fsayskeyboard");
}	
	
if ($_GET['action'] == 'mappertriangl') {	
	$outputtext =  "add triangle";
	system("sudo /var/www/sync/mappert");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperquad') {
	$outputtext =  "add quad";
	system("sudo /var/www/sync/mapperq");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappercircle') {
	$outputtext =  "add circle";
	system("sudo /var/www/sync/mapperr");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappersave') {
	$outputtext =  "save comp";
	system("sudo /var/www/sync/mappers");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperdelete') {
	$outputtext =  "delete";
	system("sudo /var/www/sync/mapperdel");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperpersp') {
	$outputtext =  "toggle perspective";
	system("sudo /var/www/sync/mapperpersp");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperfullscreen') {
	$outputtext =  "make quad fullscreen";
	system("sudo /var/www/sync/mapperfullscreen");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperedgeblend') {
	$outputtext =  "adjust edgeblend in mapper";
	system("sudo /var/www/sync/mapperedgeblend");
	system("killall -9 /opt/fsayskeyboard");
}


if ($_GET['action'] == 'mappergrid') {
	$outputtext =  "create grid";
	system("sudo /var/www/sync/mappergrid");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperimport1') {
	$outputtext =  "open mappersetting1.xml";
	system("sudo /var/www/sync/mapperimport1 > /dev/null 2>&1");
}

if ($_GET['action'] == 'mapperimport2') {
	$outputtext =  "open mappersetting2.xml";
	system("sudo /var/www/sync/mapperimport2 > /dev/null 2>&1");
}

if ($_GET['action'] == 'mapperimport3') {
	$outputtext =  "open mappersetting3.xml";
	system("sudo /var/www/sync/mapperimport3 > /dev/null 2>&1");
}

if ($_GET['action'] == 'mapperimport4') {
	$outputtext =  "open mappersetting4.xml";
	system("sudo /var/www/sync/mapperimport4 > /dev/null 2>&1");
}

if ($_GET['action'] == 'mapperimport5') {
	$outputtext =  "open mappersetting5.xml";
	system("sudo /var/www/sync/mapperimport5 > /dev/null 2>&1");
}

if ($_GET['action'] == 'mapperimport6') {
	$outputtext =  "open mappersetting6.xml";
	system("sudo /var/www/sync/mapperimport6 > /dev/null 2>&1");
}


if ($_GET['action'] == 'mapperexport1') {
	$outputtext =  "saved mappersetting1.xml";
	system("sudo /var/www/sync/mapperexport1");
}

if ($_GET['action'] == 'mapperexport2') {
	$outputtext =  "saved to mappersetting2.xml";
	system("sudo /var/www/sync/mapperexport2");
}

if ($_GET['action'] == 'mapperexport3') {
	$outputtext =  "saved to mappersetting3.xml";
	system("sudo /var/www/sync/mapperexport3");
}

if ($_GET['action'] == 'mapperexport4') {
	$outputtext =  "saved to mappersetting4.xml";
	system("sudo /var/www/sync/mapperexport4");
}

if ($_GET['action'] == 'mapperexport5') {
	$outputtext =  "saved to mappersetting5.xml";
	system("sudo /var/www/sync/mapperexport5");
}

if ($_GET['action'] == 'mapperexport6') {
	$outputtext =  "saved to mappersetting6.xml";
	system("sudo /var/www/sync/mapperexport6");
}


if ($_GET['action'] == 'mapperundo') {
	$outputtext =  "undo command";
	system("sudo /var/www/sync/mapperundo");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperinfo') {
	$outputtext =  "info";
	system("sudo expect /var/www/sync/mapperinfo");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappernext') {
	$outputtext =  "select next surface";
	system("sudo /var/www/sync/mappernext");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperprev') {
	$outputtext =  "select prev surface";
	system("sudo /var/www/sync/mapperprev");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermediaselectth') {
	$outputtext =  "select next source";
	system("sudo /var/www/sync/mapperthrough");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperplaypause') {
	$outputtext =  "play/pause mapping source";
	system("sudo /var/www/sync/mapperpause");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperaddrow') {
	$outputtext =  "add row gridwarp only";
	system("sudo /var/www/sync/mapperaddrow");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperrmrow') {
	$outputtext =  "remove row gridwarp only";
	system("sudo /var/www/sync/mapperrmrow");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperaddcolumn') {
	$outputtext =  "add column gridwarp only";
	system("sudo /var/www/sync/mapperaddcolumn");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperrmcolumn') {
	$outputtext =  "remove column gridwarp only";
	system("sudo /var/www/sync/mapperrmcolumn");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappernextvertex') {
	$outputtext =  "select next vertex";
	system("sudo /var/www/sync/mappernextvertex");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperprevvertex') {
	$outputtext =  "select previous vertex";
	system("sudo /var/www/sync/mapperprevvertex");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperleft') {
	$outputtext =  "move left";
	system("sudo /var/www/sync/mapperleft");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperleftbig') {
	$outputtext =  "move left big";
	system("sudo /var/www/sync/mapperv");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperright') {
	$outputtext =  "move right";
	system("sudo /var/www/sync/mapperright");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperrightbig') {
	$outputtext =  "move right big";
	system("sudo /var/www/sync/mappern");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperup') {
	$outputtext =  "move up";
	system("sudo /var/www/sync/mapperup");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperupbig') {
	$outputtext =  "move up big";
	system("sudo /var/www/sync/mapperx");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperdown') {
	$outputtext =  "move down";
	system("sudo /var/www/sync/mapperdown");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperdownbig') {
	$outputtext =  "move down big";
	system("sudo /var/www/sync/mapperb");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperlayerup') {
	$outputtext =  "layerup";
	system("sudo /var/www/sync/mapperlayerup");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperlayerdown') {
	$outputtext =  "layerdown";
	system("sudo /var/www/sync/mapperlayerdown");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperscaleup') {
	$outputtext =  "scaleup (has delay)";
	system("sudo /var/www/sync/mapperscaleup");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperscaledown') {
	$outputtext =  "scaledown (has delay)";
	system("sudo /var/www/sync/mapperscaledown");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperfps') {
	$outputtext =  "show/hide fps display";
	system("sudo /var/www/sync/mapperI");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappersender') {
	$outputtext =  "set mapper to sender";
	system("sudo /var/www/sync/mappersender");
}

if ($_GET['action'] == 'mapperreceiver') {
	$outputtext =  "set mapper to receiver";
	system("sudo /var/www/sync/mapperreceiver");
}

if ($_GET['action'] == 'mapperwhat') {
	//$outputtext =  "is it set to sender or receiver, not done yet";
	system("sudo /var/www/sync/mapperwhat");
}




//# Mapper Slide Show settings


if ($_GET['action'] == 'mapperslidetime2') {
	$outputtext =  "mapper slideshowtime 2s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>2</SlideDuration>@' /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/magslideshow_settings.xml");
}																							

if ($_GET['action'] == 'mapperslidetime5') {
	$outputtext =  "mapper slideshowtime 5s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>5</SlideDuration>@' /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperslidetime10') {
	$outputtext =  "mapper slideshowtime 10s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>10</SlideDuration>@' /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperslidetime15') {
	$outputtext =  "mapper slideshowtime 15s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>15</SlideDuration>@' /home/pvj/openFrameworks/addons/ofxPiMapper/example_fbo-sources/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperresizenative') {
	$outputtext =  "mapper resize slideshow to native";
	system("sudo /var/www/sync/mappersizenative");
}

if ($_GET['action'] == 'mapperresizefit') {
	$outputtext =  "mapper resize slideshow to fit";
	system("sudo /var/www/sync/mappersizefit");
}

if ($_GET['action'] == 'mapperresizefitprop') {
	$outputtext =  "mapper resize slideshow to fitproportionally";
	system("sudo /var/www/sync/mappersizefitprop");
}

if ($_GET['action'] == 'mapperresizefillprop') {
	$outputtext =  "mapper resize slideshow to fillproportionally";
	system("sudo /var/www/sync/mappersizefillprop");
}

//# Impress Presentation

if ($_GET['action'] == 'impresslast') {
	$outputtext =  "open recent document";
	system("sudo /var/www/sync/impress");
}

if ($_GET['action'] == 'impressrelaunch') {
	$outputtext =  "Launch Impress";
	system("sudo /var/www/sync/startimpress");
}

if ($_GET['action'] == 'impressplay') {
	$outputtext =  "Playmode/Presentation";
	system("sudo /var/www/sync/impressf5");

}

if ($_GET['action'] == 'impressedit') {
	$outputtext =  "Editmode";
	system("sudo /var/www/sync/impressesc");

}

if ($_GET['action'] == 'impressnext') {
	$outputtext =  "Next";
	system("sudo /var/www/sync/impressnext");
}

if ($_GET['action'] == 'impressprev') {
	$outputtext =  "Prev";
	system("sudo /var/www/sync/impressprev");

}

if ($_GET['action'] == 'impressopen') {
	$outputtext =  "Open file";
	system("sudo /var/www/sync/impressopen");
}

if ($_GET['action'] == 'impressclose') {
	$outputtext =  "Save file";
	system("sudo /var/www/sync/impressclose");
}

//# Painter

if ($_GET['action'] == 'launchpainter') {
	system("sudo /var/www/sync/stopall");
	system("sudo /usr/bin/python /var/www/sync/simplepainter.py");
	$outputtext =  "launched mask painter";
}

if ($_GET['action'] == 'savemask') {
	system("sudo /opt/screenshot/./screenshot > /media/internal/images/screenshot.png");
	system("sudo convert /media/internal/images/screenshot.png -fuzz 20% -transparent white /media/internal/images/mask.png");
	$outputtext =  "saved as transparent mask.png";
}

//# Projector Control

if ($_GET['action'] == 'beameron') {
	$outputtext =  "Projector ON";
	system("sudo /var/www/sync/beameron");
}

if ($_GET['action'] == 'beameroff') {
	$outputtext =  "Projector OFF";
	system("sudo /var/www/sync/beameroff");
}

if ($_GET['action'] == 'beamerstatus') {
	$output = shell_exec('sudo /var/www/sync/beamerstatus');
	$preoutputtext =  "projector is:<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'beameronir') {
	$outputtext =  "Projector ON via IR";
	system("sudo /var/www/sync/beameronir");
}

if ($_GET['action'] == 'beameroffir') {
	$outputtext =  "Projector OFF via IR";
	system("sudo /var/www/sync/beameroffir");
}



//# Change Network universe from 192.168.2.* to 10.0.0.*

if ($_GET['action'] == 'iprange10') {
	system("sudo /var/www/sync/iprange10");
	$outputtext =  "Set RJ45 IP to 10.0.0.* ,needs a reboot!";
}

if ($_GET['action'] == 'iprange192') {
	system("sudo /var/www/sync/iprange192");
	$outputtext =  "Set RJ45 IP to 192.168.2* ,needs a reboot!";
}

//# Change Network to DHCP/Static

if ($_GET['action'] == 'setdhcp') {
	$outputtext =  "Set dhcp (disable sync & projector control)";
	#system("sudo cp /etc/network/interfaces /var/www/sync/interfaces.static");
	system("sudo cp /var/www/sync/interfaces.dhcp /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic100') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static100 /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic101') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static101 /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic102') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static102 /etc/network/interfaces");
}

//////////////////////
//# TCPSyphon Receiver
//////////////////////

if ($_GET['action'] == 'tcpsserver') {
	system("sudo /var/www/sync/tcpsserver");
	$outputtext =  "re/start TCPSyphon Receiver";
}

if ($_GET['action'] == 'tcpsserver_downleft') {
	system("sudo /var/www/sync/tcpsserver_downleft");
	$outputtext =  "re/start TCPSyphon Receiver downleft";
}

if ($_GET['action'] == 'tcpsserver_downright') {
	system("sudo /var/www/sync/tcpsserver_downright");
	$outputtext =  "re/start TCPSyphon Receiver downright";
}

if ($_GET['action'] == 'tcpsserver_topright') {
	system("sudo /var/www/sync/tcpsserver_topright");
	$outputtext =  "re/start TCPSyphon Receiver topright";
}
if ($_GET['action'] == 'tcpsserver_topleft') {
	system("sudo /var/www/sync/tcpsserver_topleft");
	$outputtext =  "re/start TCPSyphon Receiver topleft";
}


//# Start Screenshare

if ($_GET['action'] == 'startscreensharing') {
	$outputtext =  "start screenshare";
	system("sudo /var/www/sync/stopall");
	// show IP on tty2
	system("sudo /var/www/sync/./showip_tty > /dev/tty2");
	system("sudo cp /var/www/sync/vncstartup /home/pvj/.config/lxsession/LXDE/autostart");
	system("sudo su -s /bin/bash -c startx pvj &");
}

//# System Stuff for Fun

if ($_GET['action'] == 'gettemp') {
	$output = shell_exec('sudo /opt/vc/bin/vcgencmd measure_temp');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'getgpu') {
	$output = shell_exec('sudo vcdbg reloc');
	$outputtext = "<pre>$output</pre>";
}

if ($_GET['action'] == 'getswap') {
	$output = shell_exec('sudo free');
	$outputtext = "<pre>$output</pre>";
}

if ($_GET['action'] == 'getfreq') {
	$outputtext = shell_exec('sudo cat /sys/devices/system/cpu/cpu0/cpufreq/cpuinfo_cur_freq');
}

if ($_GET['action'] == 'cpuusage') {
	$output = shell_exec('top');
	system("sudo killall -9 top");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 124, "<br />\n");
}

if ($_GET['action'] == 'buildversion') {
	$outputtext = shell_exec('cat /etc/pvj_version');
}

if ($_GET['action'] == 'oladversion') {
	$outputtext = shell_exec('/usr/bin/olad --version');
}

if ($_GET['action'] == 'omxversion') {
	$outputtext = shell_exec('/usr/bin/omxplayer --version');
}

if ($_GET['action'] == 'kernelversion') {
	$outputtext = shell_exec('sudo uname -r');
}

if ($_GET['action'] == 'powersupply') {
	$outputtext = shell_exec('/var/www/sync/powersupply');
}

//# Webserver

if ($_GET['action'] == 'passwddissable'){
	$outputtext =  "disable CP login password";
	system("sudo cp /var/www/sync/passwddisable /etc/lighttpd/lighttpd.conf");
	system("sudo service lighttpd restart");
}

if ($_GET['action'] == 'passwdenable'){
	$outputtext =  "enable CP login password";
	system("sudo cp /var/www/sync/passwdenable /etc/lighttpd/lighttpd.conf");
	system("sudo service lighttpd restart");
}

if ($_GET['action'] == 'stopwebserver'){
	system("sudo service lighttpd stop");
	system("sudo service smbd stop");
	system("sudo kill $(pgrep -f '/usr/bin/php-cgi') > /dev/null 2>&1");
	$outputtext =  "CP - Webserver down until reboot";
}

//#Ressource Saving

if ($_GET['action'] == 'servicecheck'){
	$output = shell_exec('sudo /var/www/sync/servicecheck');
	$outputtext = "<pre>$output</pre>";
}
if ($_GET['action'] == 'startlirc'){
	$outputtext =  "LIRC/IR daemon enabled";
	system("sudo systemctl start lircd");
	system("sudo systemctl enable lircd");
	system("sudo systemctl enable lircd.socket");
	system("sudo systemctl enable lircmd.service");
	system("sudo systemctl enable lircd-setup.service");
	system("sudo systemctl enable lircd-uinput.service");
	system("sudo systemctl start irexec.service");
	system("sudo systemctl enable irexec.service");
	//enable also in boot/config.txt
	system("sudo sed -ri 's/^#dtoverlay=gpio-ir,gpio_pin=.+$/dtoverlay=gpio-ir,gpio_pin=18/' /boot/config.txt");
	system("sudo sed -ri 's/^#dtoverlay=gpio-ir-tx,gpio_pin=.+$/dtoverlay=gpio-ir-tx,gpio_pin=4/' /boot/config.txt");
	//should be added to alle force resolution scripts...if once someone uses this anyway
}

if ($_GET['action'] == 'stoplirc'){
	$outputtext =  "LIRC/IR daemon disabled";
	system("sudo systemctl stop lircd");
	system("sudo systemctl disable lircd");
	system("sudo systemctl disable lircd.socket");
	system("sudo systemctl disable lircmd.service");
	system("sudo systemctl disable lircd-setup.service");
	system("sudo systemctl disable lircd-uinput.service");
	system("sudo systemctl stop irexec.service");
	system("sudo systemctl disable irexec.service");
	//disable also in boot/config.txt
	system("sudo sed -ri 's/^dtoverlay=gpio-ir,gpio_pin=.+$/#dtoverlay=gpio-ir,gpio_pin=18/' /boot/config.txt");
	system("sudo sed -ri 's/^dtoverlay=gpio-ir-tx,gpio_pin=.+$/#dtoverlay=gpio-ir-tx,gpio_pin=4/' /boot/config.txt");
	//should be added to alle force resolution scripts...
}



if ($_GET['action'] == 'stopsamba'){
	$outputtext =  "stop/disable samba";
	system("sudo systemctl stop smbd");
	system("sudo systemctl disable smbd");
	system("sudo systemctl stop nmbd");
	system("sudo systemctl disable nmbd");
}

if ($_GET['action'] == 'startsamba'){
	$outputtext =  "start/enable samba";
	system("sudo systemctl start smbd");
	system("sudo systemctl enable smbd");
	system("sudo systemctl start nmbd");
	system("sudo systemctl enable nmbd");
}

if ($_GET['action'] == 'stopshell'){
	$outputtext =  "stop and disable shellinabox";
	system("sudo systemctl stop shellinabox.service");
	system("sudo systemctl disable shellinabox.service");

}

if ($_GET['action'] == 'startshell'){
	$outputtext =  "start and enable shellinabox";
	system("sudo systemctl start shellinabox.service");
	system("sudo systemctl enable shellinabox.service");
}

if ($_GET['action'] == 'stopusb'){
	system("sudo echo '1-1' |sudo tee /sys/bus/usb/drivers/usb/unbind");
	$outputtext =  "disbled usb&rj45 ports";
}

if ($_GET['action'] == 'startusb'){
	//system("sudo echo '1-1' |sudo tee /sys/bus/usb/drivers/usb/bind");
	//system("sudo service networking restart > /dev/null 2>&1");
	//system("ifconfig wlan0 up");
	$outputtext =  "WIP not implemented yet, just reboot to be back";
}

if ($_GET['action'] == 'startswap'){
	system("sudo swapon -a");
	system("sudo service dphys-swapfile start > /dev/null 2>&1");
	system("sudo systemctl enable dphys-swapfile");
	$outputtext =  "Swap space enabled";
}

if ($_GET['action'] == 'stopswap'){
	system("sudo swapoff -a");
	system("sudo service dphys-swapfile stop > /dev/null 2>&1");
	system("sudo systemctl disable dphys-swapfile");
	$outputtext =  "Swap space disabled";
}



//# OSC receiver

if ($_GET['action'] == 'oscreceiver') {
	system("sudo /var/www/sync/osc_start");
	$outputtext =  "start OSC Control Receiver";
}

//# Remote Access over Internet

if ($_GET['action'] == 'remoteaccesson'){
	//#set password enable, restart webserver
	system('sudo cp /var/www/sync/passwdenable /etc/lighttpd/lighttpd.conf');
	system("sudo service lighttpd restart");
	//enable service so its also active  after reboot
	system("sudo systemctl enable openvpn");
	system("sudo systemctl start openvpn");
	//#start tunneling service, already done with systemctl
	//system('sudo /var/www/sync/startremote');
	//# switch shortcut in index to elFinder
	system("sudo /var/www/sync/set_elfinder");
	$outputtext =  "Enables web remote access and password";
}

if ($_GET['action'] == 'remoteaccessoff'){
	system("sudo /etc/init.d/openvpn stop");
	system("sudo systemctl stop openvpn");
	//disable automatic service on boot
	system("sudo systemctl disable openvpn");
	system("sudo killall openvpn");
	system("sudo ip link delete tun0");
	//# add command to switch shortcut in index to eXtplorer
	system("sudo /var/www/sync/set_extplorer");
	//# remove password protection
	system('sudo cp /var/www/sync/passwddisable /etc/lighttpd/lighttpd.conf');
	system("sudo service lighttpd restart");
	$outputtext =  "Disabled web remote access and password";
}


//# Camera Live Feed

if ($_GET['action'] == 'camerafeed') {
	$outputtext =  "start camerafeed";
	system("sudo /var/www/sync/camerafeed");
}

if ($_GET['action'] == 'camerapicture') {
	$outputtext =  "snap a picture with camera and store in /internal/images";
	system("sudo /var/www/sync/camerapicture");
}

//# Webcam

if ($_GET['action'] == 'startwebcamusb') {
	$outputtext =  "usb webcam server";
	system("sudo /var/www/sync/startwebcamusb");
}

if ($_GET['action'] == 'stopwebcamusb') {
	$outputtext =  "stop usb webcam server";
	system("sudo /var/www/sync/stopwebcamusb");
}

if ($_GET['action'] == 'onscreenwebcamusb') {
	$outputtext =  "show webcam on screen/display";
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo /usr/bin/python /var/www/sync/camerastream.py");
}

if ($_GET['action'] == 'onscreenwebcamusbhsv') {
	$outputtext =  "show webcam on screen/display";
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo /usr/bin/python /var/www/sync/camerastreamhsv.py");
}

if ($_GET['action'] == 'onscreenwebcamusbgender') {
	$outputtext =  "show gender detection on screen, read manual!";
	// needs a script to open x and trigger /sync/gender.py
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/xsessiongender /home/pvj/.config/lxsession/LXDE/autostart");
	system("sudo su -s /bin/bash -c startx pvj &");
}

//# enable camera in boot.config

if ($_GET['action'] == 'disablecamera') {
	system("sudo sed -ri 's/^start_x=.+$/start_x=0/' /boot/config.txt");
	$outputtext =  "camera disabled, please reboot!";
}

if ($_GET['action'] == 'enablecamera') {
	system("sudo sed -ri 's/^start_x=.+$/start_x=1/' /boot/config.txt");
	$outputtext =  "camera enabled, please reboot!";
}

//# enable camera efx

if ($_GET['action'] == 'cameranone') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=none/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = none";
}

if ($_GET['action'] == 'cameragpen') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=gpen/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = gpen";
}

if ($_GET['action'] == 'camerasketch') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=sketch/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = sketch";
}

if ($_GET['action'] == 'cameraemboss') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=emboss/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = emboss";
}

if ($_GET['action'] == 'camerahatch') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=hatch/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = hatch";
}

//# Custom Buttons / Functions

if ($_GET['action'] == 'customfunction1') {
	system("sudo /var/www/sync/customfunction1");
	$outputtext =  "customfunction1";
}

if ($_GET['action'] == 'customfunction2') {
	system("sudo /var/www/sync/customfunction2");
	$outputtext =  "customfunction2";
}

//# Extension PIR commands

if ($_GET['action'] == 'stillshot') {
	system("sudo /var/www/sync/stillshot");
	$outputtext =  "stillshot saved in /pir/stillshot.png";
}

if ($_GET['action'] == 'startloopfile') {
	system("sudo /var/www/sync/startloopfile &");
	$outputtext =  "playing all files from /pir/loop folder";
}

if ($_GET['action'] == 'startpir1') {
	system("sudo /var/www/sync/stopall &");
	system("sudo fbi -T 1 -a -noverbose /media/internal/pir/stillshot.png &");
	system("sudo python /var/www/sync/startpir1.py > /dev/null 2>&1 &");
	$outputtext =  "starting the pir1 function";
}

//starts the pir test, not able to pipe the output yet
//if ($_GET['action'] == 'startpir1') {
//	system("sudo /var/www/sync/stopall &");
//	$outputtext = shell_exec('sudo python /var/www/sync/startpirtest.py &');
//}


if ($_GET['action'] == 'pirhigh') {
	system("sudo /var/www/sync/stopall &");
	system("sudo /var/www/sync/setpir_high");
	$outputtext =  "set PIR to high sense = 12";
}

if ($_GET['action'] == 'pirmedium') {
	system("sudo /var/www/sync/stopall &");
	system("sudo /var/www/sync/setpir_medium");
	$outputtext =  "set PIR to medium sense = 20";
}

if ($_GET['action'] == 'pirlow') {
	system("sudo /var/www/sync/stopall &");
	system("sudo /var/www/sync/setpir_low");
	$outputtext =  "set PIR to low sense = 30";
}


if ($_GET['action'] == 'gettemperature') {
	$output = shell_exec('sudo python /var/www/sync/AdafruitDHT.py 11 14');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

//# Extension Button commands

if ($_GET['action'] == 'startbuttons') {
	//first stop buttons to make sure its not double running
	system("sudo /var/www/sync/stopbuttons");
	shell_exec("sudo /usr/bin/python3 /var/www/sync/startbuttons.py > /dev/null 2>&1 & ");
	#shell_exec("sudo /usr/bin/python3 /var/www/sync/startbuttons_new.py > /dev/null 2>&1 & ");
	$outputtext =  "start buttons";
}

if ($_GET['action'] == 'stopbuttons') {
	//system("sudo su - root -c '/usr/bin/python3 /var/www/sync/startbuttons.py' &");
	system("sudo /var/www/sync/stopbuttons");
	$outputtext =  "stop buttons";
}

//# Extension Beacon commands

if ($_GET['action'] == 'startbeacon') {
	system("sudo /var/www/sync/stopall &");
	system("sudo fbi -T 1 -a -noverbose /media/internal/pir/stillshot.png &");
	system("sudo /var/www/sync/startbeacon > /dev/null 2>&1 &");
	$outputtext =  "start beacon listener";
}

if ($_GET['action'] == 'stopbeacon') {
	system("sudo /var/www/sync/stopbeacon");
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	$outputtext =  "stop beacon listener";
}



if ($_GET['action'] == 'beacondelayenable') {
	system("sudo /var/www/sync/stopbeacon");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startlessonce01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startlessonce02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startlessonce03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startlessonce04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackonce01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackonce02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackonce03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackonce04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackaudio01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackaudio02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackaudio03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/startdmxplaybackaudio04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=YES' /var/www/sync/stopallb");
	$outputtext =  "enabled beacon delay";
}

if ($_GET['action'] == 'beacondelaydisable') {
	system("sudo /var/www/sync/stopbeacon");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startlessonce04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackonce04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackaudio01b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackaudio02b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackaudio03b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/startdmxplaybackaudio04b");
	system ("sudo sed -i '/ENABLE=/c ENABLE=NO' /var/www/sync/stopallb");
	$outputtext =  "disabled beacon delay";
}

if ($_GET['action'] == 'setbeaconname') {
	system("sudo /var/www/sync/stopbeacon > /dev/null 2>&1");
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	$outputtext =  "beacon name set";
}	

if ($_GET['action'] == 'beacon1name') {
	$outputtext = shell_exec('cat /var/www/sync/bluetooth_beacon.py | grep beacon1=');
}

if ($_GET['action'] == 'beacon2name') {
	$outputtext = shell_exec('cat /var/www/sync/bluetooth_beacon.py | grep beacon2=');
}

if ($_GET['action'] == 'beacon3name') {
	$outputtext = shell_exec('cat /var/www/sync/bluetooth_beacon.py | grep beacon3=');
}

if ($_GET['action'] == 'beacon4name') {
	$outputtext = shell_exec('cat /var/www/sync/bluetooth_beacon.py | grep beacon4=');
}


echo $outputtext;
?>
