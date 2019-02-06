<?php
include('class_lib/Product.php');

class ProductDB
{
    public function getProduct($aProductCode)
    {
        // In a more realistic application, this code would
        // get the data for the product from a file or database
        // For now, this code just uses if/else statements
        // to return the correct product data

        // create the Product object
        $product = new Product();
		
		// fill the Product object with data based on productCode received
        $product->setCode($aProductCode);
        
        if ($aProductCode == "java")
        {
            $product->setDescription("Murach's Beginning Java 2");
            // Added actual publisher information
            $product->setPublisher("Mike Murach & Associates Inc (September 1, 2001)");
            $product->setPrice(49.50);
        }
		
        else if ($aProductCode == "jsps")
        {
            $product->setDescription("Murach's Java Servlets and JSP");
            // Added actual publisher information
            $product->setPublisher("Mike Murach & Associates; 3rd edition (June 9, 2014)");
            $product->setPrice(55.99);
        }
        else if ($aProductCode == "mcb2")
        {
            $product->setDescription("Murach's Mainframe COBOL");
            // Added actual publisher information
            $product->setPublisher("Mike Murach & Associates Inc (August 31, 2004)");
            $product->setPrice(59.50);
        }
        else if ($aProductCode == "txtp")
        {
            $product->setDescription("TextPad");
            // No publisher, added Developer instead
            $product->setPublisher("Helios Software Solutions");
            $product->setPrice(20.00);
        }
		else
        {
            $product->setDescription("Unknown Product Code");
            $product->setPublisher("Unknown");
			$product->setPrice(0.00);
        }
		
        return $product;
    }
}
?>
