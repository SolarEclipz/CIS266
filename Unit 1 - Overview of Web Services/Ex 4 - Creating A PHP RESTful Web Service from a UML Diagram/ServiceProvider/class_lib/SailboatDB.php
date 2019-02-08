<?php
include('class_lib/Sailboat.php');

class SailboatDB
{
    public function getSailBoat($aBoatCode)
    {
        // In a more realistic application, this code would
        // get the data for the product from a file or database
        // For now, this code just uses if/else statements
        // to return the correct product data

        // create the Sailboat object
        $sailboat = new Sailboat();
		
		// fill the Product object with data based on productCode received
        $sailboat->setBoatName($aBoatCode);
        
        if ($aBoatCode == "XX") // my nunmber has been omited. Put a "code" here that is typed into search bar to return that boatinfo
        {
            $sailboat->setOwnerName("XX XX"); // put first and last name here
            $sailboat->setNumberOfSail("0"); // int number of sails here
            $sailboat->setPrice(00); // int number for price of boat
        }
		
        else if ($aBoatCode == "X")
        {
            $sailboat->setOwnerName("X X");
            $sailboat->setNumberOfSail("0");
            $sailboat->setPrice(0);
        }
        else if ($aBoatCode == "XXX")
        {
            $sailboat->setOwnerName("XXX XXX");
            $sailboat->setNumberOfSail("000");
            $sailboat->setPrice(000);
        }
        else if ($aBoatCode == "XXXX")
        {
            $sailboat->setOwnerName("XXXX XXXX");
            $sailboat->setNumberOfSail("0000");
            $sailboat->setPrice(0000);
        }
		else
        {
            $sailboat->setOwnerName("Unknown sailboat");
            $sailboat->setNumberOfSail("Unknown");
			$sailboat->setPrice(0.00);
        }
		
        return $sailboat;
    }
}
?>
