<?php 

// A Sprinter reduces his speed 15% for every meter he has run.
// Once his speed is 50% of max speed he must stop to prevent lesions.

class Sprinter extends Runner{

	public function run($distance){
		$distance = intval($distance); //meters
		$this->setSpeed($this->maxSpeed); //assumption (not from UML)
		for($d=1;$d<=$distance;$d++){
			$this->setSpeed($this->getSpeed()*0.85);
			if ($this->getSpeed() > $this->maxSpeed/2){
				$this->travelMeter();
			} else {
				//stop to prevent lesions.
				break; //exit loop
			}
		}
	}
}