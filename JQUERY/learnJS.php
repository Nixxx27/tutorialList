<html>
	<head>
		<title></title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body onUnload="alert('this body has been loaded!');">

<button onclick="funky('test')">test</button>
<br>
<br>

<form action="">
	<input type="button" value="Touch Me" onClick="alert('hey yeah');alert('heyah more');">

</form>

<a href="http://www.thenewboston.com" onMouseOver="alert('hover')">Hover over me!</a><br>
<a href="http://www.thenewboston.com" onMouseOut="alert('mouse out')">Mouse out!</a>
<br>

</body>

</html>


	<script type="text/javascript">
	
	<!--
	//var name = "nikko";
	//var age = "26";
	//document.write(name);
	//alert(name + " your age is " + age+".");

	function funky(x){
		alert(x);
	}

	//-->	

	function addNumbers(num1,num2){
		var sum = num1+num2;

		return sum;
	}


	document.write(addNumbers(10,4));

/* FOR LOOP */
document.write("<br>");

for (f= 0; f<10; f++) {
	document.write("for loop <br/>");
};

/*WHILE LOOP */

document.write("<br>");
	var w =6;

	while(w<10){ //while the condition is true run the code (difference from do while. it checks the condition first)
		document.write(w + "while loop <br/>");
		w++;
	}


/* DO WHILE */
document.write("<br>");
 var d = 5

 	do{
 		document.write(d + " im do while <br/>"); //run the code first then the while (condition)
 		d++;
 	} while(d<=20);




/*  LENGTH */
	var tuna = "hey im the tuna";
	var ab =tuna.length;

	document.write(ab);


 /* EVENT HANDLERS*/



</script>






	<?php


	?>