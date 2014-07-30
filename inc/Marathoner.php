<?php 

// A Marathoner likes to speak while he runs. 
// For every mile he has run, he speaks the mile number, 
// but for multiples of three he speaks 'Go' instead of the mile number 
// and for multiple of five he speaks 'Faster'. 
// For miles that are multiple of both he speaks 'Go Faster'.

class Marathoner extends Runner{

	public function run($distance){
		$distance = intval($distance); //meters
		$this->setSpeed($this->maxSpeed/2); //not defined in UML

		$miles = $distance/1609.34; //convert to miles
		for($d=1;$d<=$distance;$d++){ //for each meter
			$this->travelMeter();
		}
		for($m=1;$m<=$miles;$m++){ //for each mile
			$spoken = false;
			if($m%3 === 0){
				$this->speak("Go");
				$spoken = true;
			}
			if($m%5 === 0){
				$this->speak("Faster");
				$spoken = true;
			}
			if(!$spoken){
				$this->speak($m); //speak mile number
			}
		}
	}

}