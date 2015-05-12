<?php

header("content-type: application/json");// trick the browser and the target application that it is a json file not php
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];


class connection{
    public function dbConnect(){
        //return new PDO("mysql:host=localhost; dbname=oop", "root", "nikkoz06");
        try {
            return $handler = new PDO ('mysql:host=127.0.0.1;dbname=sts','root','nikkoz06');
            $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
                die();//die('Sorry Database Problem.');
            }
    }
}//EndClass

class Query{

	private $db,$sql;

	public function __construct(){
		$this->db = new connection();
		$this->db = $this->db->dbConnect();
	}
	public function myQuery(){
		$this->sql = "SELECT * FROM "
	}

}


$jsonData ='{ "obj1" :{"propertyA":"' .$var1 . '","propertyB":"' . $var2.'"} }';
echo $jsonData;

?>
