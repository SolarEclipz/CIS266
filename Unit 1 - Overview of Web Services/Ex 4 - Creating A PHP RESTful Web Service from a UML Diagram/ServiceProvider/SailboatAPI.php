<?php
//header("Content-type: application/json");
include('class_lib/SailboatDB.php');

$boatInfo = $_REQUEST['sailboat'];

$sailboatDB = new SailboatDB();
$rSailboat = $sailboatDB->getSailBoat($boatInfo);

$data = array();
$data['sailBoatString'] = $rSailboat->toString();
$data['boatName'] = $rSailboat->getBoatName();
$data['ownerName'] = $rSailboat->getOwnerName();
$data['numberOfSails'] = $rSailboat->getNumberOfSails();
$data['productPrice'] = $rSailboat->getPrice();

print(json_encode($data));

?>
