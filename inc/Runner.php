<?php 

// Abstract Classes focus on a kind of things similarity.
// In PHP, an Abstract class may not be instantiated.

// for example: 
// A Runner is a type of Person.
// A Runner must define methods outlined in the Athlete interface.

abstract class Runner extends Person implements Athlete{

	protected $maxSpeed = 8; //int
	protected $speed = 0; //float

	public function __construct($maxSpeed=false){ // UML Runner()
		parent::__construct();
		if($maxSpeed){
			$this->maxSpeed = intval($maxSpeed);
		}
	}

	public function setSpeed($speed){
		$speed = floatval($speed); //int is not practical here
		if($speed <= $this->maxSpeed){
			$this->speed = $speed;
		} else {
			// speed maxed out
			$this->speed = $this->maxSpeed;
		}
	}

	public function getSpeed(){
		return floatval($this->speed); //int is not practical here
	}

}