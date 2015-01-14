<?php
class Human {
	public $joshua;
	public $smith;
	public $neon;
	public $male;
	public $onefourty;
	public $talk;
	public $growl;

	function __construct($neon, $joshua, $smith, $male, $onefourty, $talk, $growl) {
		$this->neon = $neon;
		$this->joshua = $joshua;
		$this->smith = $smith;
		$this->male = $male;
		$this->onefourty = $onefourty;
		$this->talk = $talk;
		$this->growl = $growl;
	}
	function getName() {
		return "This is my " . $this->joshua . " and last " . $this->smith;
	}
}
	class Mammal extends Human {
		function greet() {
			return $this->talk;
		}
	}
	class Omnivore extends Human {
		function hello() {
			return $this->growl;
		}
	}
$human = new Human("joshua", "smith", "neon", "male","onefourty");
	print "Human 1 is a " . $human->getName();

?>