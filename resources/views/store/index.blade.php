@extends('store.template')

@section('content')

<div class='container text-center'>
	<div id="products">
		@foreach($products as $p)
			<div class="product white-panel">
				<h3>{{$p->name}}</h3><hr>
				<img src="{{$p->image}}">
				<div class="product-info white-panel">
					<p>{{$p->extract}}</p>
					<p><span class="label label-success">Precio: ${{ number_format($p->price,2) }}</span></p> 
					<p>
						<a class="btn btn-warning" href=""><i class="fa fa-cart-plus"></i>Obtener</a>
						<a class="btn btn-primary" href="{{ route('product-detail', $p->slug) }}"><i class="fa fa-chevron-circle-right"></i>Leer más</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>

@stop