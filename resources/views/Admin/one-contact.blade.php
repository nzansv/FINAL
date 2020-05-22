@extends('layouts.adminapp')
@section('title') Message @endsection
@section('content')
				<!-------------------------- SHOW ALL MESSAGES -------------------------->
				<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Name</th>
									<th class="column-2">Email</th>
									<th class="column-3"></th>
									<th style="width: 200px;" class="column-4 text-center">Message</th>
									<th class="column-6"></th>
									<th class="column-6"></th>
									<th class="column-6"></th>
								</tr>
								
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
									{{ $data->name }}
										</div>
									</td>
									<td width="150">{{ $data->email }}</td>
									<td width="100"></td>
									<td>
									{{ $data->message }}
									</td>
									<td>

									</td>
									<td></td>
									<td width="100" align="center">
									<a href="{{ route('contact-delete', $data->id) }}"><div class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></div></a>
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