@extends('layout.master')

@section('title')
	Checkout | ShoppingCart 
@endsection

@section('content')
	<div class="row push-up-down">
		<div class="col-md-6 col-sm-6 col-md-offset-4 col-sm-offset-3">
			<h2>Checkout</h2>
			<h4>Your Total: ${{ $total }}</h4>
			<form method="post" action="#">
				
			</form>
		</div>
	</div>
@endsection