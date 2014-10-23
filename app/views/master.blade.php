<!DOCTYPE html>
<html>
	<head>

		<title>@yield('title', 'P3')</title>
		<style>

			h1{text-align:center;background-color: rgb(145,198,164); font-family: Arial, Verdana, Sans-serif; }
			h2{text-align:center; font-size:80%; background-color: rgb(145,198,164);font-family: Arial, Verdana, Sans-serif;}
			body{text-align:center;background-color: rgb(145,198,164);font-family: Arial, Verdana, Sans-serif;}
		</style>
		@yield('head')

	</head>

	<body>
		@yield('content')
	</body>
</html>