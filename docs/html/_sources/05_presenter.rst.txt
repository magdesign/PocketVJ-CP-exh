.. _presenter:

PRESENTER
=========

The section for slideshows, pdf and impress presentations:


.. image:: _images/05_CP_presenter.png



CONTROL
********

- **Previous** => Manually go to previous
- **Next** => Manually go to next

SLIDE SHOW
***********

- **Manual** => Start Manual slideshow to use buttons above
- **Slide Show** => Start automatic slideshow
- **Manual .pdf** => Opens the demo.pdf from /internal/pdf/ folder
- **Slide Show USB** => Plays all images from the root folder of an USB stick
- **Manual .pdf USB** => Opens the demo.pdf from USB stick

.. note::
    - Do not use empty spaces, special characters and very long filenames.
    - Rename your images with a short name without any empty spaces or umlauts, you can do this also with the 'Filename-Fixer' function.
    - If you have images slightly bigger than 1920x1080, in SLIDESHOW mode they will be displayed with the ken burn effect! Just make sure your images are not huge, meaning in numbers: 3840x2160 pixel / 72dpi is way enough!!




SLIDE TIME
***********

- Define the time until next slide will appear



    




OVERLAY
*********

- Create an overlay.png with transparency in the /internal/images/ folder and overlay it over the Videoplayer

see video tutorial: https://www.pocketvj.com/pocketvj-rtc



IMPRESS
********

- Do some nice automatic playing presentations.

See tutorial:


AUDIO
******

- Play an audio file from /internal/audio/*.mp3

.. note::
    - max. audio bitrate is: 160kbit
    
    - must be an mp3 (uncomment in /sync/startaudio script to play .wav)


PAINTER
**********

.. image:: _images/05_painter.png

Make sure you have a mouse connected, 
then launch the painter. 

With left mouse buttom pressed you paint black.

With right mouse pressed you paint white.

Scrolling middle mouse wheel adjusts the size of the dot.


When finished painting your mask, hit "Save as Mask", it will be saved as mask.png everything which was white will be transparent.