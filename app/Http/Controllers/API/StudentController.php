<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseApiController;
use App\Models\Student;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\Student as StudentResource;
use Validator;

class StudentController extends BaseApiController {
	public function index() {
		$student = Student::paginate(5);

		return response()->json([ 'data' => new StudentCollection($student), 'success' => 'Students retrieved successfully' ], 200 );
	}

	public function store(Request $request) {
		$input = $request->all();

		$validator = Validator::make($input, [
			'fname' => 'required',
			'lname' => 'required',
			'email' => 'required|email',
			'age' => 'required',
			'group_id' => 'required',
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation error', $validator->errors());
		}

		$student = Student::create($input);

		return $this-> sendResponse(new StudentResource($student), 'Student created successfully');
	}

	public function show($id) {
		$student = Student::find($id);

		if (is_null($student)) {
			return $this->sendError('Student not found');
		} 

		return $this-> sendResponse(new StudentResource($student), 'Student retrieved successfully');

	}

	public function update(Request $request, Student $student) {
		$input = $request->all();

		$validator = Validator::make($input, [
			'fname' => 'required',
			'lname' => 'required',
			'email' => 'required|email',
			'age' => 'required',
			'group_id' => 'required',
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation error', $validator->errors());
		}

		$student->fname = $input['fname'];
		$student->lname = $input['lname'];
		$student->email = $input['email'];
		$student->age = $input['age'];
		$student->group_id = $input['group_id'];
		$student->save();

		return $this-> sendResponse(new StudentResource($student), 'Student updated successfully');

	}

	public function destroy(Student $student) {
		$student->delete();
		return $this-> sendResponse([], 'Student deleted successfully');

	}
}