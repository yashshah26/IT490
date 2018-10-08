
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function login($user,$pass){


	$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
	if (isset($argv[1]))
	{
 	  $msg = $argv[1];
	}
	else
	{
  	  $msg = "test message";
	}

	$request = array();
	$request['type'] = "login";
	$request['name'] = $user;
	$request['password'] = $pass;
	$request['message'] = $msg;
	$response = $client->send_request($request);
	//$response = $client->publish($request);

	//echo "client received response: ".PHP_EOL;
	//print_r($response);
	return $response;
	echo "\n\n";

	echo $argv[0]." END".PHP_EOL;
}

function register($user,$pass,$email){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }
    $request = array();
    $request['type'] = "register";
    $request['name'] = $user;
    $request['password'] = $pass;
    $request['email'] = $email;
    $request['message'] = $msg;
    $response = $client->send_request($request);
    //$response = $client->publish($request);
    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";
    echo $argv[0]." END".PHP_EOL;
}
