<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
	public function shop(){
		$products = Product::all();

		return view('CartShop.shop',[
			'products' => $products
		]);
	}
	public function showOneProduct($id) {
		$product = new Product;
		return view('CartShop.shop-one-product', [
			'data' => $product->find($id)
		]);
	}
		public function sortLow() {
			$product = Product::orderBy('price','ASC')->get();
			return view('CartShop.shop',[
				'products' => $product
			]);
		}
		public function sortHigh() {
			$product = Product::orderBy('price','DESC')->get();
			return view('CartShop.shop',[
				'products' => $product
			]);
		}
		public function sortUpd() {
			$product = Product::orderBy('updated_at','ASC')->get();
			return view('CartShop.shop',[
				'products' => $product
			]);
		}
		//=======================Search page==============================
		public function search(Request $request){
			$products = Product::all();
			$str = $request->input('query');
			
			$query = Product::where('title', 'LIKE', '%' . $str . '%')->get();
	
			return view('cartshop.search-results')->with('products', $query);
			
		}
}
