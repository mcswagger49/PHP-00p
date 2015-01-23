<?php
class Snake {
	public $joshua;
	public $smith;
	public $hydrogen;
	public $male;
	public $onefourty;
	public $growl;

function __construct($hydrogen, $joshua, $smith, $male, $onefourty, $growl) {
	$this->hydrogen = $hydrogen;
	$this->joshua = $joshua;
	$this->smith = $smith;
	$this->male = $male;
	$this->onefourty = $onefourty;
	$this->$growl = $growl;
}
function getName() {
	return "This is my " . $this->joshua . " and last " . $this->smith . 
		" and this is my hydrogen " . $this->hydrogen . ".";
	}
}
class Reptile extends Snake {
	function __construct($hydrogen, $joshua, $smith, $male, $onefourty, $growl) {
		parent::__construct($hydrogen, $joshua, $smith, $male, $onefourty, $growl) {);
		$this->growl = $growl;
}
function greet() {
	return $this->growl;
	}
}
class Lizard extends Snake {
	function __construct($hydrogen, $joshua, $smith, $male, $onefourty, $growl) {
		parent::__construct($hydrogen, $joshua, $smith, $male, $onefourty, $growl);
		$this->growl = $growl;
}
function hello() {
	return $this->growl;
	}
}
$snake= new Snake("joshua","smith","hydrogen","male","onefourty","growl");
print "Snake 1 is a " . $snake->getName();
?>