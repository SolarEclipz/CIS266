<?php

class Product
{
	private $code = "mycode";
	private $description = "my description";
	// added publisher
	private $publisher = "my Publisher";
	private $price;
	
	public function getCode()
	{
		return $this->code;
	}
	public function setCode($aCode)
	{
		$this->code = $aCode;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($aDescription)
	{
		$this->description = $aDescription;
	}
// Added publisher
	public function getPublisher() 
	{
		return $this->publisher;
	}
	public function setPublisher($aPublisher)
	{
		$this->publisher = $aPublisher;
	}
// end of add publisher getters and setters

	public function getPrice()
	{
		return $this->price;
	}
	public function getFormattedPrice()
	{
		$formattedPrice = "$" . number_format($this->price, 2);
		return $formattedPrice;
	}
	public function setPrice($aPrice)
	{
		$this->price = $aPrice;
	}
	// added publisher toString output.
	public function toString()
	{
		$rString = $this->getCode() . ", " . $this->getDescription(). ", " 
			. $this->getPublisher() . ", " . $this->getFormattedPrice();
		return $rString;
	}
}


?>
