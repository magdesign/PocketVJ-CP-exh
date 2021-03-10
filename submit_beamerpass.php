<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze
//$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:

echo $usgab;

//ds isch dr sed shit wo wo d beamerpasswort setzt
//u  im pjlink config file:
shell_exec("sudo sed -i '/password =/c password = $usgab' /home/pvj/.local/share/pjlink/pjlink.conf");


echo " = Beamer Password ";

?>
