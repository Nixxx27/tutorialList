<?php

include_once('connection.php');

class user{

private $db;

public function __construct(){

	$this->db = new Connection();
	$this->db = $this->db->dbConnect();
}

public function Login($name, $pass){
	if(!empty($name) && !empty($pass)){
		$st = $this->db->prepare("select * from login WHERE name=? and password=?");
		$st->bindparam (1,$name);
		$st->bindparam (2,$pass);
		$st->execute();

		if($st->rowcount()==1){
			echo "user verified, Access Granted.";
		}else{
			echo "Incorrect Username or password";
		};

	}else{
		echo "Please enter username and Password!";

	}



}



}