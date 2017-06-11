<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
	@include ('layouts.nav')

	<div class="container">
		<div class="row">
			
			@yield ('content')

		</div>
	</div>

	<script src="/js/app.js"></script>

</body>
</html>