<!DOCTYPE html>
<html lang="en">
<head>
	<title>Almadina Beauty Centre</title>
	
	<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet"/>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
</head>

<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="#">Almadina Beauty Centre</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#">Kelola Pasien</a></li>
				<li><a href="#">Page1</a></li>
				<li><a href="#">Page2</a></li>
				<li><a href="#">Page3</a></li>
				<li><a href="#">Page4</a></li>
				<li><a href="#">Page5</a></li>
				<li><a href="#">Page6</a></li>
			<ul>
			</div>
		</div>
	</nav>
	
	@yield('main-page')
</div>
</body>
</html>