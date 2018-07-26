<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jerry Admin</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div id="container">
		@include('layouts.sidebar')

		<div id="content">
			@if (Request::is('/'))
				<div class="jumbotron text-center">
					<h1>Laravel 5.6</h1>
					<p class="lead">LARAVEL IS A TRADEMARK OF TAYLOR OTWELL. COPYRIGHT © TAYLOR OTWELL.</p>
				</div>
			@endif

			@include('layouts.massage')
			
			@yield('content')

			<footer id="footer">
				<p class="text-center">Copyright &copy; Jerry Admin</p>
			</footer>
	
		</div>
	</div>


</body>
</html>