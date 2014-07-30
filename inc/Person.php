<?php 

class Person {
	
	protected $name; //string 
	protected $birth; //date
	protected $height; //float
	protected $weight; //float

	public function speak($words){
		$words = strval($words);
	}

	public function walk($distance){
		$distance = intval($distance);
	}

	public function getAge(){
        return intval(1);
	}

}