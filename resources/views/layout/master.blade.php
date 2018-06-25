<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap3.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/humansave.css') }}">
	@yield('styles')
</head>
<body>
	@include('partials.header')
	<div class="container">
		@yield('content')
	</div>
	<script type="text/javascript" src="{{ URL::to('js/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/bootstrap3.min.js') }}"></script>
	@yield('scripts')
</body>
</html>