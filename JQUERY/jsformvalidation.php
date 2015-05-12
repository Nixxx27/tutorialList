<html>
<head>
	<title>JS Form Validation</title>

	<script type="text/javascript">

	</script>


</head>

<body>

	<form action="" name="nikkoForm" id="nikkoForm">
		<label for="username">Username: </label> <input type="text" name="username" id="username"><br/>
		<label for="password">Password: </label> <input type="password" name="password" id="password"><br/>
		<input type="submit" name="submit" value="Submit">
	</form>


<script type="text/javascript">

var f = document.forms[0]; //access form.
document.write(f.length + "<hr>"); //count how many element inside the first form


var x = document.forms[0].elements[0].name; //access form and its element then the properties
document.write(x + "<hr>");

var y = document.forms["nikkoForm"].elements["username"].type; //access form and its element then the properties
document.write(y+ "<hr>");

var z = document.nikkoForm.password.type; //access form and its element then the properties Object/Elements
document.write(z);


var title = document.URL;
document.write(title);



</script>

</body>


</html>

