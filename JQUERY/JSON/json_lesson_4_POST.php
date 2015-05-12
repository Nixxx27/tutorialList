<!DOCTYPE html>
<html>
	<head>
		<title>JSON</title>
	<script type="text/javascript">
		function ajax_post(){
		    var hr = new XMLHttpRequest();
		   	hr.open("POST","my_json_list.php" , true);
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var data = JSON.parse(hr.responseText);
				    var results =document.getElementById("results");
					//results.innerHTML =data.u3.user + " is " + data.u3.age + " and lives in " + data.u3.country ;
					
					results.innerHTML =""; // to empty before for loop start. it contains processing
					//meaning each variable object in data
					for (var obj in data) {
						results.innerHTML += "Property A:" +data[obj].propertyA+"<hr/>";
						results.innerHTML += "Property B:" +data[obj].propertyB;
					};
			    }
		    }
		    // Send the data to PHP now... and wait for response to update the status div
		    hr.send("var1=birds&var2=bees"); // Actually execute the request
		    document.getElementById("results").innerHTML = "<h2>processing...</h2>";
		}
	</script>
	</head>
	<body>
		<script type="text/javascript">
		ajax_post();
		</script>
		<div id="results"></div>
	</body>
</html>