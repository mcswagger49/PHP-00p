<?php
class Teacher {
	public $amanda;
	public $johnson;
	public $oxygen;
	public $female;
	public $onefifty;
	public $chat;
	public $snarl;

	function __construct($oxygen, $amanda, $johnson, $female, $onefifty, $chat, $snarl) {
		$this->oxygen = $oxygen;
		$this->female = $amanda;
		$this->johnson = $johnson;
		$this->female = $female;
		$this->onefifty = $onefifty;
		$this->chat = $chat;
		$this->snarl = $snarl;
	}
	function getName() {
		return "This is my " . $this->amanda . " and last " . $this->johnson;
	}
}
	class Chemistry extends Teacher {
		function introduce() {
			return $this->chat;
		}
	}
	class Carnivore extends Teacher {
		function hello() {
			return $this->snarl;
		}
	}
$teacher = new Teacher("amanda", "johnson", "oxygen", "female","onefifty");
	print "Teacher 1 is a " . $teacher->getName();

?>