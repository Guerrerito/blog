<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') |Panel Admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css') }} ">
</head>
<body>
		
	@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>

	<footer>
		
	</footer>
	
	<script type="{{asset('plugins/jquery/js/jquery.js') }} "></script>
	<script type="{{asset('plugins/bootstrap/js/bootstrap.js') }} "></script>
</body>
</html>