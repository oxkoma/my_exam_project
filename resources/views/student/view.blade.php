@extends('layouts.master-front')


@section('content')
<div class="col-2">
        @widget('group')
</div>
<div class="col-10 pt-2 ">
<div class="container my-5 ">
<h2>Список студентов</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
	  <th scope="col">Age</th>
	  <th scope="col">Email</th>
      <th scope="col">Group</th>
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
	 
	</tr>
	@endforeach
	
  </tbody>
</table>
<div>
		{{ $students->links() }}
	</div>
  </div>
</div>
@endsection