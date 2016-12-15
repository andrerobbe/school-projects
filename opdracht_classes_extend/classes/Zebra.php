<?php 
class ZEBRA extends ANIMAL
{
	protected $species;
	function __construct($H,$G,$N,$S)
	{
		parent::__construct($N,$G,$H);
		$this->species=$S;

	}
	public function getSpecies()
	{
		return $this->species;
	}
	public function doSpecialMove()
	{
	  return parent::doSpecialMove();
	}
}
?>