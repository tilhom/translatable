<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document test local</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container">
		<ul class="nav justify-content-end">
			<li class="nav-item"><a class="nav-link" href="/locale/en">En</a></li>
			<li class="nav-item"><a class="nav-link" href="/locale/ru">Ru</a></li>
		</ul>	
		<div class="jumbotron">
			<h1>@lang('Hello world!')</h1>
			<h3>{{ $country->name}}</h3>
		</div>
	</div>
</body>
</html>