<?php 
class ANIMAL 
{
	protected $name;
	protected $gender;
	protected $health;
        
	function __construct($N,$G,$H)
	{
		$this->gender=$G;
		$this->health=$H;
		$this->name=$N;
	}
    
	public function getHealth()
	{
		return $this->health;
	}
    
	public function getName()
	{
		return $this->name;
	}
    
	public function getGender()
	{
		return $this->gender;
	}
    
	public function changeHealth($healthPoints)
	{
		$this->health+=$healthPoints;
		return $this->health;
	}
    
	public function doSpecialMove()
	{
		return "walk";
	}
}
?>