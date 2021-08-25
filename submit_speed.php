<?php
// das grift dr input vom js script im CP ab u macht es php variabeli drus,  speed cha vo 0.0 bis 4 ufe ga
    $speed = $_POST['speedValue'];
    echo $speed;
    shell_exec("sudo /var/www/sync/dbuscontrol.sh rate $speed");
?>