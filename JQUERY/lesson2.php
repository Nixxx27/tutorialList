<html>
<head>
	<title>jQuery Events</title>
	<link rel="stylesheet" href="css/day.css">

</head>

<body>
	<h1>My Website</h1>

	<button>Day</button>
	<button>Night</button>




<body>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">
		(function(){
			$('button').click(function(){
				//var n = $('ul');
				//console.log('button was clicked!');
				//console.log(this);
				//$(this).text('changed');
				$('link').attr('href','css/night.css');
			})
		})();

	</script>

</html>

