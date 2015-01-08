<?php
class Sweggster {
	public $Joshua;
	public $Smith;
	public $male;
	
	function __construct($Joshua, $Smith, $male){
		$this->Joshua = $Joshua;
		$this->Smith = $Smith;
		$this->male = $male;
	}
}
function getName(){
	return "{$this->Joshua}".
	"{this->Smith";
   }

$Sweggster = new Sweggster("Joshua", "Smith", "male");
print "Joshua: {$Sweggster->getName()}";

?>