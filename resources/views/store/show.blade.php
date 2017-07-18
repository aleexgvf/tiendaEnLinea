@extends('store.template')

@section('content')
	<h1>Detalle del Manga</h1>

	<div class="product-block">
	<img src="{{$product->image}}" width="350">
	</div>

	<div class="product-block">
		<h3>{{$product->name}}</h3>
		
		<div class="product-info">
				<p>{{$product->description}}</p>
				<p>Precio: ${{ number_format($product->price,2) }}</p> 
				<p>
					<a href="">Obtener</a>
				</p>
		</div>

	</div>
	<p><a href="{{url('/home')}}">Regresar</a></p>
@stop