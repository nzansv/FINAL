<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirm</title>
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content:center;
    align-items: center;
     
    min-height: 100vh;
    height: 100%;

  /* Center and scale the image nicely */
  background-image: url("/images/blur.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    font-family: sans-serif;
  }
  .box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }
  .card{
    position: relative;
    width: 300px;
    height: 350px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
   } </style>
</head>
<body>
@php
	$number = 0;
@endphp
<form action="{{route('order-confirm')}}" method="post">
@csrf
<div class="box">
@foreach($cartCollection as $item)
      <div class="card">
        <div class="imgBx">
            <img src="/images/item-{{ $item->id }}.jpg" alt="images">
        </div>
        <div class="details">
            <h2>{{$item->name}}<br><span>${{$item->price}}</span></h2>
        </div>
      </div>
		@foreach($data as $order)
			<input type="hidden" name="order{{$number = $number + 1}}" value="{{$order->id}}">
			<input type="hidden" name="product{{$number}}" value="{{$item->id}}">
			<input type="hidden" name="counter" value="{{$number}}">
		@endforeach
@endforeach
  </div>
  <div style="margin-top: 50px"></div>
<div>
	<h2 style="
	margin: 0;
	margin-left: 40px;
   padding: 0;
   font-weight: 600;
   font-size: 40px;
   color: #fff;
   text-transform: uppercase;">${{ \Cart::getTotal() }}</h2>
</div>

<button style="margin-left: 530px; width:150px" class="w3-button w3-pink">Confirm</button>
</form>
</body>
</html>

