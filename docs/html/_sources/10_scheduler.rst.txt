
SCHEDULER
==========

.. image:: _images/10_CP_scheduler.png



see video tutorial: https://www.pocketvj.com/pocketvj-exhibition


CLOCK
*****

**Check** => Check internal date and time

**Display** => Show a clock on screen

**Set** => Sets the correct time from the user accessing the PocketVJ, might take 2 attempts

SCHEDULER
*********

**Enable** => Enable Scheduler

**Disable** => Disable Scheduler

SCHEDULER
*********

**Every** => Helps you selecting the correct time

and the task



TIMETABLE
*********

**Show** => to make sure the timetable is loaded to PocketVJ


COMMANDS
*********


**Write Scheduler** => Write the made timetable to system


.. note::
    make sure the last command is an empty line! otherwise it will not work as expected!!

    Every task seen in the Control Panel can be scheduled!



.. image:: _images/10_scheduler_shema.png


**Example:**

Starts playing all videofiles on 08:01pm resp. 20:01 o'clock:

``01 20 * * * /var/www/sync/startmaster``


**Commands:**


Stop:             ``/var/www/sync/stopall``
    
Play video 01_* once: ``/var/www/sync/startmasterone01``

Beameron:    ``/var/www/sync/beameron``

Beameroff:  ``/var/www/sync/beameroff``

Start Mapper: ``/var/www/sync/relaunchmapper``


.. note::
    ``startmaster01`` goes up to ``startmaster99``

    ``startmasterone01`` goes up to ``startmasterone99`` (only up to 20 with SLIDESHOW after)

    ``startless01`` goes up to ``startless12`` (loops without sync)

    ``startlesseronce01`` goes up to ``startlesseronce20`` (once without sync)

    ``startlesser01`` goes up to ``startlesser05 (start video without stopping anything)``


    If you need from once specific command more scripts, just copy and edit them in ``/var/www/sync/``
    or open an issue on github to ask for more scripts.



COUNTDOWN
**********

.. image:: _images/10_CP_scheduler_countdown.png


**60** => Enter the time in Seconds 

and click:


**set Time** => Set time

**Start** => Starts the countdown, when finished it will trigger all videos as Master

**Stop** => Stops the countdown


.. note::
    Countdown was introduced with image 4.0.7, older systems need ``python3-pygame`` to be installed from SYSTEM SETTINGS!