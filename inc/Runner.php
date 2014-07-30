<?php 

abstract class Runner extends Person implements Athlete{

	private $maxSpeed = 8; //int
	private $speed = 0; //int

	abstract public function Runner($maxSpeed);
	abstract public function setSpeed($speed);
	abstract public function getSpeed();

}