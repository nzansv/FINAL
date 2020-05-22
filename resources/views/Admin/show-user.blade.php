@extends('layouts.adminapp')
@section('title') Orders @endsection
@section('content')
<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
								<th class="column-1"><a href="{{route('showuser', $orders->user_id)}}">{{ $orders->first_name }} {{ $orders->last_name }}</a></th>
								</tr>
							</table>
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th></th>
									<th class=" text-center">Product name</th>
									<th  class=" text-center">Product Price</th>
								</tr>
								
								@foreach($orders->products as $product)
								<tr class="table_row">
								<td>
								<div class="how-itemcart2">
										
										@php
											$image = '';
											if(count($product->images) > 0)
											$image = $product->images[0]['img'];
											else 
											$image = 'no-image.jpg'
										@endphp
											<img src="../images/{{$product->images[0]['img']}}" alt="IMG">
								</div
								
								</td>
								
								<td  class=" text-center">
									{{$product->title}}
								</td>
								<td class=" text-center">
									{{$product->price}}
								</td>
								</tr>
								@endforeach
								 
							</table>
						</div>
						
					</div>
				</div>

					<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
						<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
							<h4 class="mtext-109 cl2 p-b-30">
								Admin Panel
							</h4>

							<div class="flex-w flex-t bor12 p-b-1">
								<div class="size-208">
									<span class="stext-110 cl2">
										<a style="color: black"href="{{ route('admin') }}"><i class="fa fa-shield fa-rotate-270"></i> All Messages</a>
									</span>
								</div>
							</div>
							<div class="flex-w flex-t bor12 p-b-13">
								<div class="size-208 w-full-ssm">
									<span class="stext-110 cl2">
									<a  style="color: black"href="{{ route('test') }}"><i class="fa fa-shield fa-rotate-270"></i> All Products</a>
									</span>
								</div>
							</div>
							<div class="flex-w flex-t bor12 p-b-1">
								<div class="size-208 w-full-ssm">
									<span class="stext-110 cl2">
									<a  style="color: black"href="{{ route('product-add') }}"><i class="fa fa-shield fa-rotate-270"></i> Add Product</a>
									</span>
								</div>
							</div>
							<div class="flex-w flex-t bor12 p-b-13">
								<div class="size-208 w-full-ssm">
									<span class="stext-110 cl2">
									<a  style="color: black"href="{{ route('orderlist') }}"><i class="fa fa-shield fa-rotate-270"></i> Orders</a>
									</span>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</form>

@endsection