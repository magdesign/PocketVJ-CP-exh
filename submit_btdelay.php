<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze

//$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:

echo $usgab;

//ds isch dr sed shit wo wo d ds delay schribt

shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackonce01b");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackonce02b");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackonce03b");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startdmxplaybackonce04b");

shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startlessonce01b");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startlessonce02b");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startlessonce03b");
shell_exec("sudo sed -i '/DELAY=/c DELAY=$usgab' /var/www/sync/startlessonce04b");

echo " = Seconds Delay";

?>
