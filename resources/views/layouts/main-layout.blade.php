<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		@include('layouts.styles')
		@include('layouts.scripts')
	</head>
	<body>
		<div class="wrapper">
			@include('includes._header')
			@yield('main')
			@include('includes._footer')
		</div>
	</body>
</html>