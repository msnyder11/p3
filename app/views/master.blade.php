<!DOCTYPE html>
<html>
	<head>

		<title>@yield('title', 'P3')</title>
		<style>
			h1{text-align:center;}
			h2{text-align:center; font-size:80%}
			body{text-align:center;}
		</style>
		@yield('head')

	</head>

	<body>
		@yield('content')
	</body>
</html>