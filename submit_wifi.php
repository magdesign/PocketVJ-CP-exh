<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze

$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:

echo $usgab;

//ds isch dr sed shit wo im  wifi file dr wifi name ersetzt
shell_exec("sudo sed -i '/wpa-ssid/c wpa-ssid $usgab2' /var/www/sync/interfaceswifitest");
shell_exec("sudo sed -i '/wpa-ssid/c wpa-ssid $usgab2' /var/www/sync/interfaceswifidhcp");
shell_exec("sudo sed -i '/wpa-ssid/c wpa-ssid $usgab2' /var/www/sync/interfaceswifi100");
shell_exec("sudo sed -i '/wpa-ssid/c wpa-ssid $usgab2' /var/www/sync/interfaceswifi");

// u ja, d dran bini 5h xsi....

echo " = wifi name ";

?>
