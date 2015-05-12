<html>
<head>
	<title>Learn Java</title>

<script type="text/javascript">
	
	function person (name,age){
		this.name = name;
		this.age = age;
	
	}

	var nixx = {name:"nikko",age:26,test:"yeah"}; //object initializer  //object literal notation
	document.write("initializer: " + nixx.age + "<hr>");

	var bucky = new person("Nikko Zabala",26); //object constructor functions
	var taylor = new person("Taylor Swift",20);

	document.write(bucky.age + "<hr>");



	function helloWorld(arg1){
		document.write(arg1 + "<br>");
	}

	helloWorld('testing123');

/* ARRAY * ==========================/*/
	var arrayname = new Array ("array1","array2");

	/* JOIN*/
	// output the array

	var movies = new Array("Avatar","Good will hunting","Vanilla Sky","Fight Club");

	var string1 = movies.join(" - "); //will exchange the comma, what ever you put in param equivalent to php implode

	document.write(string1 + "<hr/>");

	/* POP */
	

document.write(movies[3] + "<hr/>");
movies.pop(); // will removes the last element of the array
document.write(movies[3] + "<hr/>");


/* REVERSE */

var bp = new Array("head","shoulders","knees","toes");

bp.reverse();

/* ARRAY PUSH*/

// add element one or multiple
bp.push("tongue","liver","anything");

document.write(bp.join("-") + "<hr>");

/* ARRAY SORT*/
//sort array alphabetically whatever the order

bp.sort();
var sorted = bp.join("-");
document.write(sorted);



/* ADD ARRAY ELEMENTS USING LOOP */
document.write("<hr>");
//prompt box
/*
var pie = prompt("Enter your Name:", ""); //like alert
document.write("Heya howdie " + pie);


var crap = new Array(3);
for (i=0;i<3;i++){
	crap[i] = prompt("Add something to the Array: ", "");
}

document.write(crap[0] + crap[1] +crap[2]);
*/


/* SIMPLE PRINT ARRAY*/
var stuff = new Array ("apples","pears","bacon","tuna","ham");

for(i=0;i<stuff.length;i++){
	document.write(stuff[i] + "<hr>");

}


/* ASSOCIATIVE ARRAY */


var bucky = new Array();

bucky["color"] = "blue";
bucky["food"]= "hot pockets";

document.write(bucky["color"]);



document.write("<hr>");

/* MATH */

document.write(Math.PI); //PIE value
/*

var num1 = prompt ("Insert number:");

var answer = Math.sqrt(num1);

alert("The Square root of " + num1 + " is " + answer);
*/

/* DATE OBJECT */


function doSomething() {

	document.write("Tuna");
}

//setInterval("doSomething()", 1000); // 2 param, function, and the millisec

//CREATE A CLOCK
function printTime(){
	var now = new Date(); //date now
	var hours = now.getHours(); // hours now
	var mins = now.getMinutes();
	var sec = now.getSeconds();
	document.write(hours + ":" + mins + ":" + sec);

}

//printTime();
//setInterval("printTime()",1000);
document.write("<hr>");


</script>


</head>

<body>

<p>A script on this page starts this clock:</p>
<p id="demo"></p>

<script>
var myVar = setInterval(function(){ myTimer() }, 1000);

function myTimer() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    document.getElementById("demo").innerHTML = t;
}
</script>

	<script type="text/javascript">

		document.write(bucky.name);

		document.write(taylor.name);

		document.write(nixx.name + "<br>");


		document.write(arrayname[0]);
	</script>
	
	<?php

	$array = ["php array0","php array1"];
	$array_reverse = array_reverse($array);

	echo $array_reverse[0];

	$show_array = implode(" - ",$array);
	echo "<br>" , $show_array;


	$array_number = Array(3);


	$array_number[0]= "im the array number 0";
	$array_number[1]= "im the array number 1";
	$array_number[2]= "im the array number 2";


	echo $array_number[2];

	echo "<br>" . pi();
	echo "<br>" .(rand(10,100));


	class nikkoClass {
		public function nikkoFunction($param1){
			echo $param1;
		}
	}

	$nikkoNewClass = New nikkoClass();

	echo "<br>";
	$nikkoNewClass->nikkoFunction('nikkoZabala phpClass');
	?>
</body>
</html>

