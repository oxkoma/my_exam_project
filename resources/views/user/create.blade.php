@extends('layouts.master')
@section('content')

<div class="float-start mb-3">
   	<a class="btn btn-primary" href= "{{ route('users.index') }}">Back</a> 
</div>

@if ($errors->any())
        <div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="mt-5">
	<form action="{{ route('users.store') }}" method="POST">
		@csrf
		<h3>Create user</h3>
		<div class="mb-3">
			<label for="fname" class="form-label">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>

		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection