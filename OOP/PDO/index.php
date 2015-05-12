<?php
//print_r(PDO::getAvailableDrivers());


$driver ='mysql:host=127.0.0.1;dbname=app';
$username='root';
$password='nikkoz06';

	try {
		$db = new PDO ($driver,$username,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
 		//die('Sorry, Database Problem');
 		$err = $e->getMessage();
 		die("Sorry Database Problem : $err");
 	}

//class GuestbookEntry{
//	public $id,$name,$message,$posted,$entry;

//	public function __construct(){
//		$this->entry="{$this->name} posted: {$this->message}";
//	}

//}


$sql = "SELECT * FROM guestbook";
$query = $db->query($sql);

if($query->rowCount()){
	while($rows=$query->fetch(PDO::FETCH_OBJ)){
		echo $rows->message, '<br/>';
	}
}else
{
	echo "No results";

}


//$query->setFetchMode(PDO::FETCH_ASSOC);
//$row = $query->fetchAll(PDO::FETCH_ASSOC);

//if(count($row)){
//echo "there are results";
//}else {
//	echo "No results";
// }






//$query->setFetchMode(PDO::FETCH_CLASS,'GuestbookEntry');
//while($r=$query->fetch()){
//	echo  $r->entry ,'<br/>' ;
//}

//$r =$query->fetchAll(PDO::FETCH_OBJ);
//echo '<pre>', print_r($r) ,'</pre>';

//while($row = $query->fetch(PDO::FETCH_OBJ)){
//echo $row->message, '<br/>';
//}

/// BIND PARAM
$name="a";
$message="b";

//$sql = "INSERT INTO guestbook (name,message,posted) VALUES (:name,:message,NOW())";
//$stmt = $db->prepare($sql);
//$stmt->execute(array(
//	':name' => $name,
//	':message' =>$message

//));

//$sql = "INSERT INTO guestbook (name,message,posted) VALUES (?,?,NOW())";
//$stmt = $db->prepare($sql);
//$stmt->execute(array($name,$message));

echo "last is" , $db->lastinsertID();

//$sql = "INSERT INTO guestbook (name,message,posted) VALUES (?,?,NOW())";
//$stmt = $db->prepare($sql);
//$stmt->bindparam(1,$name, PDO::PARAM_STR);
//$stmt->bindparam(2,$message, PDO::PARAM_STR);
//$stmt->execute();







//from w3schools

//<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDBPDO";

//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
//    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
//    VALUES (:firstname, :lastname, :email)");
//    $stmt->bindParam(':firstname', $firstname);
//    $stmt->bindParam(':lastname', $lastname);
//    $stmt->bindParam(':email', $email);

    // insert a row
//    $firstname = "John";
//    $lastname = "Doe";
//    $email = "john@example.com";
//    $stmt->execute();

    // insert another row
//    $firstname = "Mary";
//    $lastname = "Moe";
//    $email = "mary@example.com";
//    $stmt->execute();

    // insert another row
//    $firstname = "Julie";
//    $lastname = "Dooley";
//    $email = "julie@example.com";
//    $stmt->execute();

//    echo "New records created successfully";
//    }
//catch(PDOException $e)
//    {
//    echo "Error: " . $e->getMessage();
  //  }
//$conn = null;
//?>



