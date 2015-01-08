<?php
class Birdy {
	public $Cockatoo;
	public $Hablamatoo;
	public $female;
	
	function __construct($Cockatoo, $Hablamatoo, $female){
		$this->Cockatoo = $Cockatoo;
		$this->Hablamatoo = $Hablamatoo;
		$this->female = $female;
	}
}
function getName(){
	return "{$this->Cockatoo}".
	"{this->Hablamatoo";
}

?>