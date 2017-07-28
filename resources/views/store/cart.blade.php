@extends('store.template')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
	</div>
	<div class="table-cart">
		@if(count($cart))
			<p>
				<a href="{{route('cart-trash')}}" class="btn btn-danger">Vaciar Carrito <i class="fa fa-trash"></i></a>
			</p>

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
							<td>
								<input 
									type="number" 
									min="1"
									max="99"
									value="{{ $item->quantity }}"
									id="product_{{ $item->id }}"
								>
								<a 
									href="#" 
									class="btn btn-warning btn-update-item"
									data-href="{{ route('cart-update', $item->slug) }}"
									data-id="{{ $item->id }}"
								>	
								<i class="fa fa-refresh"></i>
									
								</a>
							</td>	
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
				<hr>
				<h3>
					<span class="label label-success">
						Total: ${{number_format($total, 2)}}
					</span>
				</h3>
			</div>
		</div>
	@else
		<h3><span class="label label-warning"> Noy hay Elementos en tu carrito :( </span></h3>
	@endif
	<hr>
	<p>
		<a href="{{url('/home')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i>  Seguir Comprando</a>
		<a href="https://www.paypal.com/invoice/payerView/details/INV2-XYRF-YAV7-FAEA-9AJV" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i>  Pagar</a>
	</p>
</div>

@stop