<?php

class Product
{
	private $code = "mycode";
	private $description = "my description";
	// added publisher
	private $publisher = "my publisher";
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

	// Added Publishher
	public function getPublisher()
	{
		return $this->publisher;
	}
	public function setPublisher($aPublisher)
	{
		$this->publisher = $aPublisher;
	}

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
	public function toString()
	{
		$rString = $this->getCode() . ", " . $this->getDescription()
			. ", " . $this->getPublisher() . ", " . $this->getFormattedPrice();
		return $rString;
	}
}


?>
