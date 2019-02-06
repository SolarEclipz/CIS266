<?php
// This file just gets linked.. and displays JSON of the information located in
// ../serviceprovider/class_lib/productdb.php
// given 'mcb2' as the product

include('class_lib/ProductDB.php');

$productDB = new ProductDB();
$rProduct = $productDB->getProduct("mcb2");
print("Product Code: " . $rProduct->getCode());
print("<br />");
print("Product Description: " . $rProduct->getDescription());
print("<br />");
print("Product Publisher: " . $rProduct->getPublisher());
print("<br />");
print("Product Price: " . $rProduct->getPrice());
print("<br /><br />");
print($rProduct->toString());

?>
