<?php

$usgab1 = $_POST['cheibeding'];

echo $usgab1;

shell_exec("sudo sed -i '/command3=/c command3=\"/var/www/sync/$usgab1\"\' /var/www/sync/bluetooth_beacon.py");

echo " to beacon3 ";

?>





