<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze

//$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:

echo $usgab;

//ds isch dr sed shit wo ds zitvalue ids python script inemurxet

shell_exec("sudo sed -i '/timevalue =/c timevalue = $usgab'  /var/www/sync/countdown.py");

echo " = Countdowntime in Seconds ";

?>
