<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\Title;


class LecturerController extends Controller
{
    public function index(){
        $lecturers = Lecturer::all();
        return view('lecturer.index',compact('lecturers'));
    }
    public function create(){
        $titles = Title::all();
        return view('lecturer.create',compact('titles'));
    }
    public function store(Request $request){
        $request->validate([
            'ltr_fname' => 'required',
            'ltr_lname' => 'required',
        ]);
        Lecturer::create($request->post());


        return redirect()->route('lecturer.index')->with('success','Lecturer has been added');
    }
    public function edit(Lecturer $lecturer){
        $titles = Title::all();
        return view('lecturer.edit',compact('lecturer','titles'));
    }
    public function update(Request $request,Lecturer $lecturer){
        $request->validate([
            'ltr_fname' => 'required',
            'ltr_lname' => 'required',
        ]);
        $lecturer->fill($request->post())->save();


        return redirect()->route('lecturer.index')->with('success','Lecturer has been updated');
    }
    public function destroy(Lecturer $lecturer){
        $lecturer->delete();
        return redirect()->route('lecturer.index')->with('success','Lecturer has been deleted');
    }
    public function show(Lecturer $lecturer){
        return view('lecturer.show',compact('lecturer'));
    }

}