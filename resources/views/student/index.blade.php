@extends('layouts.master')

@section('content')
<h2>List Students</h2>
<div class="container">
<a class="float-end btn btn-primary" href="{{ route('students.create') }}"><img src="..\..\assets\add.png" class="pe-2">Add record</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
	  <th scope="col">Age</th>
	  <th scope="col">Email</th>
      <th scope="col">Group</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	@foreach ($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->fname}}</td>
	  <td>{{$student->lname}}</td>
	  <td>{{$student->age}}</td>
	  <td>{{$student->email}}</td>
	  <td>{{$groups[$student->group_id-1]->name}}</td>
	  <td>
		<form action="{{ route('students.destroy', $student->id) }}" method="POST">
			<a class="btn btn-info" href="{{ route('students.show', $student->id) }}"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="{{ route('students.edit', $student->id) }}"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

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
		{{ $students->links() }}
	</div>
</div>
@endsection