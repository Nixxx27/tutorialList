<?php

class User {

	public function __construct($message){
		echo 'Hi from ' . $message . '<br>';
	}

}

$nikko = new User('nikko');
$jon = new User('Jon');
$tom = new User('Tom');
