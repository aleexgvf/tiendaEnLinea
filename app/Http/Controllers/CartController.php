<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
	public function __construct() //constructor para mantener un carrito o crear un carrito dependiendo el caso en el que el usuario se encuentre dentro de la pagina
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

    //Muestra los elementos que se encuentran en un array que se creó
    public function show()
    {
    	$cart =\Session::get('cart');
    	$total=$this->total();
    	return view('store.cart', compact('cart', 'total'));
    	//return \Session::get('cart');

    }

    //add item
    public function add(Product $product)
    {
    	$cart = \Session::get('cart');
    	$product->quantity=1;
    	$cart[$product->slug] = $product;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }
    //delete item

    public function delete(Product $product)
    {
    	$cart = \Session::get('cart');
    	unset($cart[$product->slug]);
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }
    //thrash cart
    public function trash()
    {
    	\Session::forget('cart');
    	return redirect()->route('cart-show');
    }

    //update
    public function update(Product $product, $quantity)
    {
    	$cart = \Session::get('cart');
    	$cart[$product->slug]->quantity = $quantity;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }
    //total

    private function total()
    {
    	$cart = \Session::get('cart');
    	$total=0;
    	foreach($cart as $item)
    	{
    		$total += $item->price *$item->quantity;
    	}

    	return $total;
    }
}
