<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pidn = mysqli_real_escape_string($conn,$_POST['pidn']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$pidn="abc";
include("php/dbconn.php");
mysqli_select_db($conn,"user");
$results = mysqli_query($conn,"SELECT PIDN,password FROM user");
while($row = mysqli_fetch_array($results) ){
$password= $row['password'];
}
require_once "vendor/autoload.php";

$mail = new PHPMailer;

$mail->From = "hasanakash0215@gmail.com";
$mail->FromName = "Kamrul Hasan";

$mail->addAddress("hasanakashiotupload@gmail.com", "hasan akash");


$mail->isHTML(true);


$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = $password;

try {
    $mail->send();
       header("refresh:0; url=register.php");
       $message = "Auto genartae password has been sent successfully to ".$email;
       echo "<script type='text/javascript'>alert('$message');</script>";
} catch (Exception $e) {
  header("refresh:0; url=register.php");
  $message = "Error!!! Auto genartae password can not send to ".$email;
  echo "<script type='text/javascript'>alert('$message');</script>";
}
