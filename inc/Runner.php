<?php 

abstract class Runner extends Person implements Athlete{

	protected $maxSpeed = 8; //int
	protected $speed = 0; //float

	public function __construct($maxSpeed){ // UML Runner()
		parent::__construct();
		$this->maxSpeed = intval($maxSpeed);
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