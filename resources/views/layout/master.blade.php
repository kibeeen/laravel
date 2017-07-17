<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

	<link rel='stylesheet' href='{{ asset('css/style.css') }}'>

</head>
<body>
	<div class='container'>
		<h1>Heading</h1>
		<div>
			<h2>Navigation</h2>

			<ul>
				<li>Link 1</li>
				<li>Link 2</li>
			</ul>
		</div>

		<div>
			<h2>Contents here</h2>
			@yield('main_content')
		</div>

		<div>
			<h2>Footer</h2>
			@yield('footer')
		</div>
	</div>

</body>
</html>