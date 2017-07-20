@extends('store.template')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
	</div>
	<div class="table-cart">
		<div class="table-resposive">
			<table class="table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Quitar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cart as $item)
					<tr>
						<td><img src="{{$item->image}}"></td>
						<td>{{$item->name}}</td>	
						<td>{{number_format($item->price,2)}}</td>	
						<td>{{$item->quantity}}</td>	
						<td>{{number_format($item->price*$item->quantity,2)}}</td>
						<td>
							<a href="{{route('cart-delete', $item->slug)}}" class="btn btn-danger">
								<i class="fa fa-remove">
									
								</i>
							</a>
						</td>					
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop