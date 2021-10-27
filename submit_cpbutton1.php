<?php

$usgab1 = $_POST['cheibeding'];

echo $usgab1;

shell_exec("sudo sed -i '/BTN1 =/c BTN1 = (\"sudo /var/www/sync/$usgab1 &\")' /var/www/sync/startbuttons.py");
//stop button script and start again to be active:
shell_exec("sudo /var/www/sync/stopbuttons");
shell_exec("sudo /usr/bin/python /var/www/sync/startbuttons.py > /dev/null 2>&1 & ");


echo " to button1 ";

?>



