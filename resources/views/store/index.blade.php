@extends('store.template')

@section('content')
<div class="products">
	@foreach($products as $p)
		<div class="product">
			<h3>{{$p->name}}</h3>
			<img src="{{$p->image}}" width="200">
			<div class="product-info">
				<p>{{$p->extract}}</p>
				<p>Precio: ${{ number_format($p->price,2) }}</p> 
				<p>
					<a href="">Obtener</a>
					<a href="{{ route('product-detail', $p->slug) }}">Leer más</a>
				</p>
			</div>
		</div>
	@endforeach
</div>

@stop