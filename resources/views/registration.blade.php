@extends('layouts.master-front')

@section('content')
<div class="my-5 w-50 mx-auto">
	<form action="{{ route('user.registration') }}" method="POST">
		@csrf
		<h3>Registration</h3>
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
			@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
			@error('email')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
			@error('password')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>

		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection