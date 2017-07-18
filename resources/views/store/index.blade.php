<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> Listado de Productos</h1>
@foreach($products as $p)
	<h3>{{$p->name}}</h3>
	<img src="{{$p->image}}" width="200">
@endforeach

</body>
</html>