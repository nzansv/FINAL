<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
// $this->middleware('auth');
}

/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/



public function index(){
$products = Product::all();

return view('home',[
'products' => $products
]);
}
public function sortlow(){
	$product = Product::orderBy('price','ASC')->get();
	return view('home',[
		'products' => $product
	]);
}
public function sortHigh(){
	$product = Product::orderBy('price','DESC')->get();
	return view('home',[
		'products' => $product
	]);
}
public function sortUpd() {
	$product = Product::orderBy('updated_at','ASC')->get();
	return view('home',[
		'products' => $product
	]);
}

public function adminHome()
    {
        return view('adminHome');
    }
//public function showOneProduct($id) {
// $product = new Product;
// return view('shop-one-product', [
// 'data' => $product->find($id)
// ]);
//}

}
