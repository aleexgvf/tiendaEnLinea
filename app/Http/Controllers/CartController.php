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
    	return view('store.cart', compact('cart'));
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

    	return redirect()->route('cart-show');
    }
    //thrash cart
    //total
}
