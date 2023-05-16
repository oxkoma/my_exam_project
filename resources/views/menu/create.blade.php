@extends('layouts.master')
@section('content')

<div class="float-start mb-3">
   	<a class="btn btn-primary" href= "{{ route('menus.index') }}">Back</a> 
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
	<form action="{{ route('menus.store') }}" method="POST">
		@csrf
		<h3>Create menu</h3>
		<div class="mb-3">
			<label for="name" class="form-label">Title</label>
			<input type="text" class="form-control" name="name" placeholder="Title">
		</div>
		<div class="mb-3">
			<label for="action" class="form-label">Action</label>
			<input type="text" class="form-control" name="action" placeholder="Action">
		</div>
		<div class="mb-3">
			<label for="content" class="form-label">Content</label>
			<input type="text" class="form-control" name="content" placeholder="Content">
		</div>
		<div class="mb-3">
			<label for="keywords" class="form-label">Keywords</label>
			<input type="text" class="form-control" name="keywords" placeholder="Keywords">
		</div>
		<div class="mb-3">
			<label for="descriptions" class="form-label">Descriptions</label>
			<textarea class="form-select" name="descriptions">
			
			</textarea>
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection