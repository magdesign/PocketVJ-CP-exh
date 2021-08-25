<?php
// this gets the input from JS:
    $opacity = $_POST['opacityValue'];
    echo $opacity;
    shell_exec("sudo /var/www/sync/dbuscontrol.sh setalpha $opacity");
?>