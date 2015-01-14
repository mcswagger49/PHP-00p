<?php

class Boss{
	public $talk;
	public $lecture;
	public $work;
	
	function __construct($talk, $lecture, $work){
		$this->talk = $talk;
		$this->lecture = $lecture;
		$this->work = $work;
		
public function talk(){
	return "The Boss gets to talk";
	 	}
	}
}



?>