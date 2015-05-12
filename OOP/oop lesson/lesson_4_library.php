<?php

class User {

	public $name;
	public $email;

	public function __construct($name, $email){
		$this->name=$name;
		$this->email=$email;
	}

	public function getType(){
		return $this->type;
	}


}// end USER


class Admin extends user {
	public $permissionLevel;
	public $type = 'Admin';

	
	public function __construct($name, $email,$permissionLevel) {
		parent::__construct($name, $email);
		$this->permissionLevel=$permissionLevel;
	}



	public function getType(){
		return 'Hello from ' . parent::getType();
	}


}// end ADMIN


class Member extends user {
	public $dateAdded;
	public $type = 'Member';

	
	public function __construct($name, $email,$dateAdded) {
		parent::__construct($name, $email);
		$this->dateAdded=$dateAdded;
	}



	public function getType(){
		return 'Hello from ' . parent::getType();
	}


}// end Member