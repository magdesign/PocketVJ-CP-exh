#! /bin/sh

#script for mapping udp messages to functions
#if you miss something, just add it in the similar style or contact pocketvj support

#we read all the messages received from UDP and parse them to a function

read MESSAGE


##############
# STOP Command
##############


if [ "$MESSAGE" = "stop" ]
  then
  ( /var/www/sync/stopall & )
    echo "player killed"
    exit
  fi

#######################
# Video Play Commands #
#######################

if [ "$MESSAGE" = "startmaster" ]
  then
  ( /var/www/sync/startmaster &)
    echo "started video master"
    exit
  fi

if [ "$MESSAGE" = "startmaster01" ]
  then
  ( /var/www/sync/startmaster01 &)
    echo "started video01 master"
    exit
  fi

if [ "$MESSAGE" = "startmaster02" ]
  then
  ( /var/www/sync/startmaster02 &)
    echo "started video02 master"
    exit
  fi

if [ "$MESSAGE" = "startmaster03" ]
  then
  ( /var/www/sync/startmaster03 &)
    echo "started video03 master"
    exit
  fi

if [ "$MESSAGE" = "startmaster04" ]
  then
  ( /var/www/sync/startmaster04 &)
    echo "started video04 master"
    exit
  fi


if [ "$MESSAGE" = "startmaster05" ]
  then
  ( /var/www/sync/startmaster05 &)
    echo "started video05 master"
    exit
  fi


if [ "$MESSAGE" = "startmaster06" ]
  then
  ( /var/www/sync/startmaster06 &)
    echo "started video06 master"
    exit
  fi

##################
# Image player  #
#################

if [ "$MESSAGE" = "imagestart" ]
  then
  ( sudo /var/www/sync/startimage &);
    echo "imageplayer start"
    exit
  fi

################
# DMX Playback #
################
# dmx + video

if [ "$MESSAGE" = "startdmxplaybackvid01" ]
  then
  ( sudo /var/www/sync/startdmxplaybackvid01 &);
    echo "playback dmx01 and video 01_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackvid02" ]
  then
  ( sudo /var/www/sync/startdmxplaybackvid02 &);
    echo "playback dmx02 and video 02_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackvid03" ]
  then
  ( sudo /var/www/sync/startdmxplaybackvid03 &);
    echo "playback dmx03 and video 03_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackvid04" ]
  then
  ( sudo /var/www/sync/startdmxplaybackvid04 &);
    echo "playback dmx04 and video 04_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackvid05" ]
  then
  ( sudo /var/www/sync/startdmxplaybackvid05 &);
    echo "playback dmx05 and video 05_* in loop"
    exit
  fi
# dmx + audio

if [ "$MESSAGE" = "startdmxplaybackaudio01" ]
  then
  ( sudo /var/www/sync/startdmxplaybackaudio01 &);
    echo "playback dmx01 and audio 01_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackaudio02" ]
  then
  ( sudo /var/www/sync/startdmxplaybackaudio02 &);
    echo "playback dmx02 and audio 02_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackaudio03" ]
  then
  ( sudo /var/www/sync/startdmxplaybackaudio03 &);
    echo "playback dmx03 and audio 03_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackaudio04" ]
  then
  ( sudo /var/www/sync/startdmxplaybackaudio04 &);
    echo "playback dmx04 and audio 04_* in loop"
    exit
  fi

if [ "$MESSAGE" = "startdmxplaybackaudio05" ]
  then
  ( sudo /var/www/sync/startdmxplaybackaudio05 &);
    echo "playback dmx05 and audio 05_* in loop"
    exit
  fi


##################
# Shortlinks  #
#################


if [ "$MESSAGE" = "testscreen" ]
  then
  ( sudo /var/www/sync/testscreen &);
    echo "display testscreen"
    exit
  fi

