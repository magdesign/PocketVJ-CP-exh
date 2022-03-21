FILE MANAGEMENT
===============

Here you can manage the files of the internal storge.

.. image:: _images/04_CP_filemanagement.png



INFO
*****

- **Diskspace** => Show the diskspace
- **Movie Codec** => Show movie codec infos
- **Movie Resolution** => Show movie resolution

USB
****

- **Mount** => Mount an USB stick
- **Unmount** => Unmount an USB stick


BROWSER
*********

- select one of the 3 available filebrowsers
- make the one you like as default


.. note::
    - **filebrowser** is not accessible over the internet
    - **elFinder** has a max. upload size of 2GB
    - **eXtplorer** is default, but might cause trouble with touch devices
    
TOOLS
******

- **Permission Fixer** => if you lost write access to the storage, press this button
- **Filename Fixer** => removes whitespaces, unreadable characters like à è é ö ä ü and shortens the Filename
- **Clean Hidden** => especially when copying files vie Samba from OSX, you will get som .file files which cause the player to struggle, just click here to get rid of them
- **Conform Images** => resizes all images to max. 1920 x 1080 and converts them to .jpg


UPLOAD FILES
*************

To upload new content, follow this procedure:

1. In the shortlinks, click **STOP** to free all resources

2. Click the 'Filebrowser shortlink'

3. There opens up a new tab with an eXtplorer window 

4. Upload and manage your files in the :code:`/internal`

5. Be patient while uploading and do not disconnect the power!


.. image:: _images/04_extplorer.png





.. note::
    - For uploading large files (>400MB) copy from a connected USB stick https://www.pocketvj.com/pocketvj-exhibition
    - 
    - Filezilla for fast uploading via sftp://

    - Do not use empty spaces or special characters in your filenames, use `TOOLS`_ =>  **Filename Fixer** 
    
    - Use the folder structure as given

    - If you are not able to up/download files, use `TOOLS`_ => **Permission Fixer**

    - Stop the player before uploading and managing content



FILEZILLA
**********

Use ``sftp://``

1. Open Filezilla, under Server enter the IP: sftp://2.0.0.*** (replace the asterix with the number of your PocketVJ WiFi name)

2. Hit Enter and you should be able to navigate to the folder

``/media/internal/``

3. Load or edit your files, be sure not to modify any other directories!



LOADING FROM USB TO INTERNAL
*****************************

Supported file systems are: vFAT, FAT32, exFAT, HFS, NTFS, EXT4

See tutorial: https://www.pocketvj.com/pocketvj-exhibition


SAMBA
******
If you never used samba, its great to disable this service, 
this will free up some cpu. 

If you need it, turn it on and do following:

See tutorial: https://www.pocketvj.com/pocketvj-rtc


.. image:: _images/04_samba.png



1. In Finder go to: GO > Connect to Server

2. In the Server address bar type : ``smb://2.0.0.***``

3. Connect, in the password prompt select ``Guest``.

4. Your Finder mounts a Network device named: ``media``

5. Load and edit your files directly with finder


.. note::
    If you move large files, finder may tell you: copy zero bytes of.... Estimating time remaining... and it looks like finder hangs showing turning colorball, then just go and grab a coffee, it is copying in the background :-)
    
    600MB may take around 16 Minutes.

