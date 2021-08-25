<?php

// das grift dr input vom js script im CP ab:
$delay = $_POST['submitme'];
//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze
//$delay2 = '"'.($delay).'"';
//hie mache mr es echo wos im CP ir delay schribt, abr ds ohni quotes:
echo $delay;

//ds isch dr sed shit wo wo d ds delay schribt
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio01");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio02");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio03");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio04");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio05");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackvid01");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackvid02");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackvid03");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackvid04");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackvid05");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startmididmxvideoplay01");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startmididmxaudioplay01");

shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio01b");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio02b");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio03b");
shell_exec("sudo sed -i '/AUDIODELAY=/c AUDIODELAY=$delay' /var/www/sync/startdmxplaybackaudio04b");
echo " = Seconds Delay";
?>
