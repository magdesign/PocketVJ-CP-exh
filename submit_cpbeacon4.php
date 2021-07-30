<?php

$usgab1 = $_POST['cheibeding'];

echo $usgab1;

shell_exec("sudo sed -i '/command4=/c command4=\"/var/www/sync/$usgab1\"\' /var/www/sync/bluetooth_beacon.py");

echo " to beacon4 ";

?>





