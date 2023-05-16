@extends('layouts.master')
@section('content')

<div class="float-start mb-3">
   	<a class="btn btn-primary" href= "{{ route('students.index') }}">Back</a> 
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
	<form action="{{ route('students.store') }}" method="POST">
		@csrf
		<h3>Create student</h3>
		<div class="mb-3">
			<label for="fname" class="form-label">First name</label>
			<input type="text" class="form-control" name="fname" placeholder="First name">
		</div>
		<div class="mb-3">
			<label for="lname" class="form-label">Last name</label>
			<input type="text" class="form-control" name="lname" placeholder="Last name">
		</div>
		<div class="mb-3">
			<label for="age" class="form-label">Age</label>
			<input type="number" class="form-control" name="age" placeholder="Age">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="mb-3">
			<label for="group" class="form-label">Group</label>
				<select class="form-select" aria-label="Default select example" name="group_id">
			@foreach ($groups as $group)
				<option value="{{ $group->id }}">{{ $group->name }}</option>
			@endforeach
			</select>
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection