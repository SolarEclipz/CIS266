<?php
//refer to www.killerphp.com/tutorials/php-objects-page1/

// Used to test the API

include('class_lib/ProductDB.php');

$productDB = new ProductDB();
$rProduct = $productDB->getProduct("mcb2");
print($rProduct->getCode());
print("<br />");
print($rProduct->getDescription());
print("<br />");
// added publisher to test
print($rProduct->getPublisher());
print("<br />");
print($rProduct->getPrice());
print("<br /><br />");
print($rProduct->toString());

?>
