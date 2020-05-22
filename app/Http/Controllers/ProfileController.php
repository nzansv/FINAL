<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class ProfileController extends Controller
{
	public function ShowProfile($id){
		$order = Order::where('user_id',$id)->get();
		return view('Profile.profile', [
			'orders' => $order
		]);
	}
}
