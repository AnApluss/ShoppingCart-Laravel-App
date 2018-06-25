@extends('layout.master')

@section('title')
	SignUp | Shopping-Cart 
@endsection

@section('content')
	<div class="row push-up-down">
		<div class="col-md-4 col-md-offset-4">
			@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
			<h1>Sign In</h1>
			<form action="{{ route('user.signin') }}" method="post">
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input class="form-control" id="email" type="email" name="email" placeholder="E-mail">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" id="password" type="password" name="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Sign In</button>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection