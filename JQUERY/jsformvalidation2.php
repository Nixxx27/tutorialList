<html>
<head>
	<title>JS Form Validation</title>

	<script type="text/javascript">
		function validator(){
			if(document.nikkoForm.theBox.checked){
				var x = document.nikkoForm.length
				alert('it is checked!' + x);
			}else{
				alert('not checked!');
			}
		}

	</script>


</head>

<body>

	<form action="" name="nikkoForm" id="nikkoForm">
		<input type="checkbox" name="theBox">
		<input type="button" value="Press Me!" onClick="validator()">
	</form>



</body>


</html>

