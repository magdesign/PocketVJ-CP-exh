<?php

$usgab1 = $_POST['cheibeding'];

echo $usgab1;

shell_exec("sudo sed -i '/command2=/c command2=\"/var/www/sync/$usgab1\"\' /var/www/sync/bluetooth_beacon.py");

echo " to beacon2 ";

?>





