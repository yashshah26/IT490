<?php
session_start();

include("testRabbitMQClient.php");
$user = $_POST['name'];
$pass = $_POST['password'];

$response = login($user, $pass);
if($response == true)
  { 
    echo "Welcome";
  }
  else
  {
    echo "Not Allowed";
    header("Refresh:1; url=login.html", true, 303);
  }

?>

