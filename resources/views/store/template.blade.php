<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> @yield('title', 'Manga Store')</title>
</head>
<body>

	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

</body>
</html>