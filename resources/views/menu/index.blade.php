@extends('layouts.master')

@section('content')
<h2>List Menus</h2>
<div class="container">
<a class="float-end btn btn-primary" href="{{ route('menus.create') }}"><img src="..\..\assets\add.png" class="pe-2">Add record</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
	  <th scope="col">Content</th>
	  <th scope="col">Keywords</th>
      <th scope="col">Descriptions</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	@foreach ($menus as $menu)
    <tr>
      <th scope="row">{{$menu->id}}</th>
      <td>{{$menu->name}}</td>
	  <td>{{$menu->action}}</td>
	  <td>{{$menu->content}}</td>
	  <td>{{$menu->keywords}}</td>
	  <td>{{$menu->descriptions}}</td>
	  <td>
		<form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
			<a class="btn btn-info" href="{{ route('menus.show', $menu->id) }}"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="{{ route('menus.edit', $menu->id) }}"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

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