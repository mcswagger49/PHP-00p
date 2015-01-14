<?php
class Bird {
	public $birdy;
	public $hirdy;
	public $sulfur;
	public $male;
	public $twentyone;
	public $speak;
	public $chirp;

	function __construct($sulfur, $birdy, $hirdy, $male, $twentyone, $speak, $chirp) {
		$this->sulfur = $sulfur;
		$this->birdy = $birdy;
		$this->hirdy = $hirdy;
		$this->male = $male;
		$this->twentyone = $twentyone;
		$this->speak = $speak;
		$this->chirp = $chirp;
	}
	function getName() {
		return "This is my " . $this->birdy . " and last " . $this->hirdy;
	}
}
	class Animal extends Bird {
		function greeting() {
			return $this->speak;
		}
	}
	class Herbivore extends Bird {
		function hello() {
			return $this->chirp;
		}
	}
$bird = new Bird("birdy", "hirdy", "sulfur", "male","twentyone");
	print "bird 1 is a " . $bird->getName();

?>