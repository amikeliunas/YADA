<?php
require_once 'config.php';

// A simple data type that abstracts a food
abstract class Food
{
	// The name of this food
	private $name;
	// The nutrition facts for this food
	private $facts;
	// Whether the food is enabled
	private $enabled = true;
	// The id of the food
	private $id;

	// Constructs a new instance of the Food class
	function __construct($name)
	{
		$this->setName($name);
	}
	
	// Gets the name of the food
	public function getName()
	{
		return $this->name;
	}
	
	// Sets the name of the food
	public function setName($name)
	{
		$this->name = $name;
	}
	
	// Gets the nutrition facts for this food
	public function getNutritionFacts($countDisabled)
	{
		// If the food is disabled and we don't want to count disabled foods
		if(!$this->enabled && !$countDisabled)
			return array();
		return $this->facts;
	}
	
	// Sets the nutrition facts for this food
	public function setNutritionFacts($facts)
	{
		$this->facts = $facts;
	}
	
	public function getNutritionFact($name, $countDisabled)
	{
		$facts = $this->getNutritionFacts($countDisabled);
		for($i=0;$i<count($facts);$i++)
		{
			if($facts[$i]->getName() == $name)
			{
				return $facts[$i]->getValue();
			}
		}
	}
	
	public abstract function hasChildren();
	public abstract function getChildren();
	public abstract function setChildren($children);
	
	public function toString()
	{
		return $this->name.': id = '.$this->id.', enabled = '.$this->enabled.', calories = '.$this->getNutritionFact('calories', true);
	}
}
?>
