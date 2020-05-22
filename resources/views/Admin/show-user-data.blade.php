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
									<th width="50px">&emsp;&nbsp;&nbsp;ID</th>
									<th class=" text-center">Name</th>
									<th  class=" text-center">Lastname</th>
									<th  class=" text-center">Email</th>
									<th  class=" text-center">Number</th>
								</tr>
								<tr class="table_row">
									<td class=" text-center">
										{{ $user->id }}
									</td>
									
									<td  class=" text-center">
										{{ $user->name }}
									</td>
									<td class=" text-center">
										{{ $user->lastname }}
									</td>
									<td class=" text-center">
										{{ $user->email }}
									</td>
									<td class=" text-center">
										{{ $user->number }}
									</td>
								</tr>
								
								 
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