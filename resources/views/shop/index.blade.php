@extends('layout.master')

@section('title')
	ShoppingCart 
@endsection

@section('content')

@foreach($products->chunk(3) as $productsChunk)
	<div class="row push-up-down">
		@foreach($productsChunk as $product)
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{URL::to($product->imagepath)}}" alt="" class="img-responsive">
			      <div class="caption">
			        <h3 class="product-title">{{ $product->title }}</h3>
			        <p class="description">
			        	{{ $product->description }}
			    	</p>
			        <div class="clearfix"> 
			        	<div class="pull-left price">${{ $product->price }}</div>
			        	<a  href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right">Add to cart</a> 
			        </div>
			      </div>
			    </div>
			 </div>
		@endforeach
	</div>
@endforeach

@endsection



