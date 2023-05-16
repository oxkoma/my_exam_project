@extends('layouts.master')
@section('content')

<div class="float-start mb-3">
   	<a class="btn btn-primary" href= "{{ route('groups.index') }}">Back</a> 
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
	<form action="{{ route('groups.store') }}" method="POST">
		@csrf
		<h3>Create group</h3>
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection