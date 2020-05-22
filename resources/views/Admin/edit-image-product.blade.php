@extends('layouts.adminapp')
@section('title') Edit Image @endsection
@section('content')
 <!--<form class="bg0 p-t-75 p-b-85">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-12 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th>Product</th>
									<th></th>
									<th>Price</th>
									<th>Quantity</th>
									<th colspan="2"></th>
								</tr>
								
								  @foreach($errors as $product)
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
										
										@php
											$image = '';
											if(count($product->images) > 0)
											$image = $product->images[0]['img'];
											else 
											$image = 'no-image.jpg'
										@endphp
											<img src="../images/{{ $image }}" alt="IMG">
										</div>
									</td>
									<td width="150">{{ $product->title }}</td>
									<td width="100">${{ $product->price }}</td>
									<td>
									${{ $product->description }}
									</td>
									<td>

									</td>
									<td></td>
									<td width="100" align="center">
									<a href="{{ route('product-form', $product->id) }}"><button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-cog"></i></button></a>
                           </td>
								</tr>

								 @endforeach
							</table>
						</div>
						-->

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						@if(count($data->images) == null)
							<a style="margin-left: 200px; padding-top: 200px;" href="{{route('add-img', $data->id)}}"><div class="btn btn-dark">Please upload photo</div></a>
						@endif
						@if(count($data->images) > 0)
						@for($i = 0; $i < count($data->images); $i++)
						<a href="{{route('image-delete', $data->images[$i]['id'])}}">
							<div class="how-itemcart1">
								<img src="/images/{{ $data->images[$i]['img'] }}" alt="IMG">
							</div>
						</a>
						<br>
						@endfor
						<a href="{{route('add-img', $data->id)}}"><div class="btn btn-dark">Upload photo</div></a>
						@endif
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Admin Panel
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
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
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
								<a  style="color: black"href="{{ route('test') }}"><i class="fa fa-shield fa-rotate-270"></i> Add Product</a>
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