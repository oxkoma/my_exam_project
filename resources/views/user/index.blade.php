@extends('layouts.master')

@section('content')
<h2>List Users</h2>
<div class="container">
<a class="float-end btn btn-primary" href="{{ route('users.create') }}"><img src="..\..\assets\add.png" class="pe-2">Add record</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
	  <th scope="col">Email</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	@foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
	  <td>{{$user->email}}</td>
	  <td>
		<form action="{{ route('users.destroy', $user->id) }}" method="POST">
			<a class="btn btn-info" href="{{ route('users.show', $user->id) }}"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="{{ route('users.edit', $user->id) }}"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

			@csrf
            @method('DELETE')
			<button type="submit" class="btn btn-danger"><img src="..\..\assets\bin.png" class="pe-2">Del</button>
		</form>  
	  </td>
	</tr>
	@endforeach
	
  </tbody>
</table>
<div>
		{{ $users->links() }}
	</div>
</div>
@endsection