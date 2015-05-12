<!DOCTYPE html>
<html>
	<head>
		<title>JSON</title>
	<script type="text/javascript">
		var obj1 = { user: "John",age: 26, country: "US"}; // JSON OBJECT
		var obj2 = { user: "Peter",age: 25, country: "UK"}; 
		var obj3 = { user: "Moses",age: 24, country: "Mexico"}; 
		var obj4 = { u1:obj1, u2:obj2, u3:obj3}; //deeply nested


		document.write(obj1.user + "<hr>");
		obj1.user = "nikko";
		document.write(obj1.user+ "<hr>");
		document.write(obj4.u2.country+ "<hr>");
		document.write(obj4["u2"]["country"]+ "<hr>");

		var meats = ["beef", "pork", "lamb"]; //array
		var fruit = ["apple","plumb","grape","orange"];
		var obj5 = { arr1:meats, arr2:fruit};
		document.write(obj5.arr1[0]);
	</script>

	</head>
	<body>
		
	</body>
</html>