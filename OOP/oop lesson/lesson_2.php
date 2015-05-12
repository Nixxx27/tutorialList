<?php

class User {

	public $age_of_ultron;

	public function __construct($age){
		$this->age_of_ultron=$age;
	}


	public function getAge(){
		echo 'Age: ' .$this->age_of_ultron;

	}




}

$nikko = new User('26');
$nikko->getAge();
