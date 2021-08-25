<?php
// das grift dr input vom js script im CP ab:
$btdelay = $_POST['submitme'];
echo $btdelay;
//ds isch dr sed shit wo wo d ds delay schribt
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackonce01b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackonce02b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackonce03b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackonce04b");

shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startlessonce01b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startlessonce02b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startlessonce03b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startlessonce04b");

shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackaudio01b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackaudio02b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackaudio03b");
shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/startdmxplaybackaudio04b");

shell_exec("sudo sed -i '/TRIGGERDELAY=/c TRIGGERDELAY=$btdelay' /var/www/sync/stopallb");

echo " = Seconds Delay";
?>
