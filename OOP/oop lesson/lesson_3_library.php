<?php

class User {

	public $age_of_ultron;
	private $password;

	public function __construct($age){
		$this->age_of_ultron=$age;
		$this->password='abcdef';
	}

	public function getAge($yrs){
		return $this->age_of_ultron . ' ' . $yrs;

	}

	public function getPassword($hint){
		if($hint =="correcthint"){
			return 'The password is: ' .$this->password;
		}else{
			return 'You don\'t have permission';
		}

	}

}


class MyClass {
	
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}