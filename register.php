<?php
session_start();

include ('testRabbitMQClient.php');
$user = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$response = register($user,$pass,$email);
if($response == true)
  {
    echo "Registered";
    header( "Refresh:1; url=login.php", true, 303);
  }
  else
  {
  echo "Was not able to register";
  header( "Refresh:1; url=register.php", true, 303);
  }
?>
