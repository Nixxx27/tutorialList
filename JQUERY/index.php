<html>
<head>
	<title></title>

	<style type="text/css">
	
	</style>

</head>

<body>
	<div class="container">
		<ul class="emphasis">
			<li>hello</li>
			<li>hello 2</li>
			<li>
				<ul>
					<li>test</li>
				</ul>
			</li>	
			<li>hello 3</li>
		</ul>
		
	</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
	$('ul.emphasis').children('li:eq(3)').text('this is my second');
	$('ul').parents('div.container').css('color','green')


</script>
</html>

