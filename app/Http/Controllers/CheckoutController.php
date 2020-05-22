<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Order_List;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CartShop.order');
	 }
	 
	 public function orderlist()
    {
        return view('Admin.orders', ['data' => Order::all()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $req) {
		$cartCollection = \Cart::getContent();	
		  $order =  Order::create($req->all());
		  $orderbyid = Order::orderBy('id', 'DESC')->take(1)->get();
        /*\Cart::clear();*/
		  return view('CartShop.order-confirm', ['data' => $orderbyid])->with(['cartCollection' => $cartCollection]);
    }
	 public function confirm(Request $req) {
		if(isset($req->order1)){
		$order = Order::find($req->order1);
		$order->products()->attach($req->product1);
		if(isset($req->order2)){
			$order = Order::find($req->order2);
			$order->products()->attach($req->product2);
			if(isset($req->order3)){
				$order = Order::find($req->order3);
				$order->products()->attach($req->product3);
				if(isset($req->order4)){
					$order = Order::find($req->order4);
					$order->products()->attach($req->product4);
					if(isset($req->order5)){
						$order = Order::find($req->order5);
						$order->products()->attach($req->product5);
						if(isset($req->order6)){
							$order = Order::find($req->order6);
							$order->products()->attach($req->product6);
								
							}
						}
					}
				}
			}
		}
		\Cart::clear();
		return redirect()->route('home');
	 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
