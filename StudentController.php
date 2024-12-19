<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Title;
use App\Models\Program;

class StudentController extends Controller
{
    public function index(){
        $students = Student::paginate(5);
        return view('student.index',compact('students'));
    }
    public function create(){
        $titles = Title::all();
        $programs = Program::all();
        return view('student.create',compact('titles', 'programs'));
    }
    public function store(Request $request){
        $request->validate([
            'std_sid' => 'required',
            'std_fname' => 'required',
            'std_lname' => 'required',
        ]);
        Student::create($request->post());


        return redirect()->route('student.index')->with('success','Student has been added');
    }
    public function edit(Student $student){
        $titles = Title::all();
        $programs = Program::all();
        return view('student.edit',compact('student','titles','programs'));
    }
    public function update(Request $request,Student $student){
        $request->validate([
            'std_sid' => 'required',
            'std_fname' => 'required',
            'std_lname' => 'required',
        ]);
        $student->fill($request->post())->save();


        return redirect()->route('student.index')->with('success','Student has been updated');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('student.index')->with('success','Student has been deleted');
    }
    public function show(Student $student){
        return view('student.show',compact('student'));
    }
}