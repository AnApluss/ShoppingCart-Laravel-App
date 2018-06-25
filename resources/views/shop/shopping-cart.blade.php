@extends('layout.master')

@section('title')
	Cart - ShoppingCart  
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row push-up-down">
			<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{ $product['item'] }}</strong>
							<span class="label label-success">{{ $product['price'] }}</span>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle = "dropdown">Actions <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Reduce by one</a></li>
									<li><a href="#">Reduce all</a></li>
								</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row push-up-down">
			<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<strong>Total: ${{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row push-up-down">
			<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<a href="{{ route('checkout') }}" type="button" class="btn btn-success">Check Out</a>
			</div>
		</div>
	@else
		<div class="row push-up-down">
			<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<h2>No item in cart!</h2>
			</div>
		</div>
	@endif
@endsection