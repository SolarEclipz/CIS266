<?php
include('class_lib/SailboatDB.php');
// When direct linked to this page, will display boat info based on getSailBoat("xx");
// where xx = what ever was set in the ../sp/cl/sailboatdb.php


$sailBoatDB = new SailboatDB();
$rSailboat = $sailBoatDB->getSailBoat("xx");	// see above comments
print("Boat Name: " . $rSailboat->getBoatName());
print("<br />");
print("Owner's Name: " . $rSailboat->getOwnerName());
print("<br />");
print("Number of sails: " . $rSailboat->getNumberOfSails());
print("<br />");
print("Boat Price: " . $rSailboat->getPrice());
print("<br /><br />");
print($rSailboat->toString());

?>
