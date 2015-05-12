<?php

include_once('user.php');

if(isset($_POST['submit'])){
	$name=$_POST['user'];
	$password=$_POST['password'];

	$object = new User();
	$object->Login($name,$password);

	//var_dump(PDO::getAvailableDrivers());

}

?>


<html>
	<head>
		
	</head>

<body>
	 
	 	<form method="POST" action="">
	 		username: <input type="text" name="user"><br/>
	 		password: <input type="text" name="password">

	 	<input type="submit" name="submit" value="Login">		
	 	</form>


</body>

</html>