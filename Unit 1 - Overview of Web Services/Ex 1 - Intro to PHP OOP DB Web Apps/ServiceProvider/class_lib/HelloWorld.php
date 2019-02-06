<?php

class HelloWorld
{
	private $name = "My Name";
	private $description = "Hello ";
	
	public function getName()
	{
		return $this->name;
	}
	public function setName($aName)
	{
		$this->name = $aName;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getMessage()
	{
		$rString = $this->getDescription() . $this->getName();
		return $rString;
	}
}

?>
