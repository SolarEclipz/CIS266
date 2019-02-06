<?php
//header("Content-type: application/json");
include('class_lib/HelloWorld.php');

$name = $_REQUEST['name'];

$helloWorld = new HelloWorld();
$helloWorld->setName($name);

$helloMsg = $helloWorld->getMessage();

$data = array();
$data['message'] = $helloMsg;

print(json_encode($data));

?>
