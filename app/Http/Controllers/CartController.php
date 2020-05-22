<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart()  {
        $cartCollection = \Cart::getContent();
        return view('CartShop.cart')->with(['cartCollection' => $cartCollection]);;
    }

     public function add(Request $request){
        \Cart::add(array(
				'id' => $request->id,
				'size' => $request->prdctsize,
            'name' => $request->name,
            'price' => $request->price,
				'quantity' => $request->quantity
        ));
        return redirect()->route('shop')->with('success_msg', 'Item is Added to Cart!');
    }

     public function clear(){
        \Cart::clear();
        return redirect()->route('cart');
    }

      public function remove($id){
        \Cart::remove($id);
        return redirect()->route('cart');
    }


}
