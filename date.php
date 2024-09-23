<?php
$name=$_POST['d1'];
print $name ."<br>";
$email=$_POST['d2'];
print $email ."<br>";

$date=date("Y-m-d")."<br>";
print $date;
date_default_timezone_set('Asia/Kolkata');
$time=date("h:i:sa");
print $time;
?>