<?php 

class Person {
	
	protected $name; //string 
	protected $birth; //date
	protected $height; //float
	protected $weight; //float

	// 2: the constructor should set default values for all the class properties.
	public function __construct(){
		$this->name = "John Blossom";
		$this->birth = new DateTime("17 December 1981"); //php 5.3+
		$this->height = floatval(6);
		$this->weight = floatval(180);
	}

	// 3: this method should output to the console all the words 
	//    concatenated and separated by a white space.
	public function speak($words){
		$words = explode(" ", strval($words));
		foreach ($words as $word) {
			echo "$word\n";
		}
	}

	public function walk($distance){
		$distance = intval($distance);
	}

	public function getAge(){
        return intval(1);
	}

}