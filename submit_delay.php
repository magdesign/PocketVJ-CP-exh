<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze

//$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:

echo $usgab;

//ds isch dr sed shit wo wo d ds delay schribt

shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackaudio01");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackaudio02");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackaudio03");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackaudio04");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackaudio05");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackvid01");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackvid02");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackvid03");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackvid04");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackvid05");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startmididmxvideoplay01");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startmididmxaudioplay01");



echo " = Seconds Delay";

?>
