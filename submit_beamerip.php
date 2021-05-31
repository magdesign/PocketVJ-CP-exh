<?php

// das grift dr input vom js script im CP ab:
$usgab = $_POST['submitme'];

//hie mache mr e zwoeti variable das mr di erschti i "quotes" choei setze
//$usgab2 = '"'.($usgab).'"';

//hie mache mr es echo wos im CP ir usgab schribt, abr ds ohni quotes:

echo $usgab;

//ds isch dr sed shit wo wo d beamerip setzt

shell_exec("sudo sed -i '/IP=/c IP=$usgab' /var/www/sync/beamer_on_off.sh");
shell_exec("sudo sed -i '/IP=/c IP=$usgab' /var/www/sync/beamer_on_off_pjlink.sh");
shell_exec("sudo sed -i '/IP=/c IP=$usgab' /var/www/sync/beamerstatus");

#u hie neu o im pjlink config file:
shell_exec("sudo sed -i '/host =/c host = $usgab' /home/pvj/.local/share/pjlink/pjlink.conf");

//hie isch no naice wenns ds o gd i placeholder im index.php schribt => id="beamerip" name="beamerip" placeholder="192.168.2.254"
echo " = Beamer IP ";

?>
