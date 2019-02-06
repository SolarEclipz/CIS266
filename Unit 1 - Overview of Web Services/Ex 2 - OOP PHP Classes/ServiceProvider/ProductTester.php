<?php
//refer to www.killerphp.com/tutorials/php-objects-page1/

// ../serviceprovider/class_lib/product.php tester

include('class_lib/Product.php');

$product = new Product();

$rCode = $product->toString();
print("$rCode");

print("<br /><br />");

$product->setCode("newCode");
$product->setDescription("new Description");
// Added Publisher to test.
$product->setPublisher("new Publisher");
$product->setPrice("99.99");

$rCode = $product->toString();
print("$rCode");

?>
