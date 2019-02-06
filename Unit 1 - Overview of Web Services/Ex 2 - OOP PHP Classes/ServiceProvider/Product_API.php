<?php
//header("Content-type: application/json");
include('class_lib/Product.php');

$productName = $_POST['product'];

$product = new Product();
$product->setCode($productName);
$product->setDescription($productName . " Description");
// added publisher
$product->setPublisher($productName . " Publisher");
$product->setPrice(29.99);

$data = array();
$data['productString'] = $product->toString();

print(json_encode($data));

?>
