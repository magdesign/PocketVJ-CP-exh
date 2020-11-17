<?php

$usgab1 = $_POST['cheibeding'];

echo $usgab1;

shell_exec("sudo sed -i '/BTN3 =/c BTN3 = (\"sudo /var/www/sync/$usgab1 &\")' /var/www/sync/startbuttons.py");

echo " to button3 ";

?>



