@extends('layouts.master')

@section('content')
<h2>List Groups</h2>
<div class="container">
<a class="float-end btn btn-primary" href="{{ route('menus.create') }}"><img src="..\..\assets\add.png" class="pe-2">Add record</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	@foreach ($groups as $group)
    <tr>
      <th scope="row">{{$group->id}}</th>
      <td>{{$group->name}}</td>
	  <td>
		<form action="{{ route('groups.destroy', $group->id) }}" method="POST">
			<a class="btn btn-info" href="{{ route('groups.show', $group->id) }}"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="{{ route('groups.edit', $group->id) }}"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

			@csrf
            @method('DELETE')
			<button type="submit" class="btn btn-danger"><img src="..\..\assets\bin.png" class="pe-2">Del</button>
		</form>  
	  </td>
	</tr>
	@endforeach
	
  </tbody>
</table>

</div>
@endsection