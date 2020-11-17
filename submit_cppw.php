<?php
//  echo $_POST['cppassword'] . "<br />";

$usgab = $_POST['cppassword'];

echo $usgab;

shell_exec("sudo sed -i '/admin/c admin:$usgab' /etc/lighttpd/.htpasswd");

echo " = new CP Password ";

?>



