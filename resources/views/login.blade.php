@extends('layouts.master-front')

@section('content')
<div class="my-5 w-50 mx-auto">
	<form action="{{ route('user.login') }}" method="POST">
		@csrf
		<h3>Sign in</h3>

		<div class="mb-3 ">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
			@error('email')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
			@error('password')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection