<?php

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$mailhead = "From:".$firstName."<".$email.">\r\n";

$recipient = "rdevpreethsingh@gmail.com";

mail($recipient,$subject,$message,$mailhead)
or die("Error");

echo"message send";

?> 