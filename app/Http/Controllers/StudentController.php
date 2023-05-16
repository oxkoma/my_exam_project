<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::cursorPaginate(5);
        $groups = Group::all();

        return view('student.index', compact('students', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('student.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'group_id'=>'required',
        ]);
        
        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $groups = Group::all();

        return view('student.show', compact('student', 'groups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $groups = Group::all();

        return view('student.edit', compact('student', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'group_id'=>'required',
        ]);
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted');

    }
    public function view()
    {
        $students = Student::cursorPaginate(5);
        $groups = Group::all();

        return view('student.view', compact('students', 'groups'));
    }

    public function sort($group_id) {
        $groups = Group::all();
        $students = Student::where('group_id', '=', $group_id)->paginate(5);

        return view('student.view', compact('students', 'groups'));
    }
}
