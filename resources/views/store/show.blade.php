@extends('store.template')

@section('content')
<div class="container text-center">
	
	<div class="page-header">
  		<i class="fa fa-cart-plus">Detalle del Manga</i>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
			 	<img src="{{$product->image}}">
			</div>
		</div>
		
		<div class="col-md-6">
		
			<div class="product-block">
				<h3>{{$product->name}}</h3>
		
		     	<div class="product-info panel">
					<p>{{$product->description}}</p>
					<h3><span class="label label-success"> Precio: ${{ number_format($product->price,2) }} </span></h3> 
					<br>
					<p>
						<a class="btn btn-warning btn-block" href="{{route('cart-add', $product->slug)}}">Obtener</a>
					</p>
				</div>

			</div>	
		</div>

	</div>

<hr>
	

	<p><a class="btn btn-primary" href="{{url('/home')}}">
	<i class="fa fa-chevron-circle-left">Regresar</i>
	</a></p>
</div>
@stop