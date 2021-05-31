<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze
$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:
echo $usgab;
shell_exec("sudo sed -i '/beacon2=/c beacon2=$usgab2' /var/www/sync/bluetooth_beacon.py");
//hie isch no naice wenns ds o gd i placeholder im index.php schribt => name="beacon2" placeholder="fbfd15706aef5c1c91de"
echo " = beacon2 namespace";

?>
