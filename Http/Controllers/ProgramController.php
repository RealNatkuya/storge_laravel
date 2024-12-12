<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;


class ProgramController extends Controller
{
    public function index(){
        $programs = Program::all();
        return view('program.index',compact('programs'));
    }
    public function create(){
        return view('program.create');
    }
    public function store(Request $request){
        $request->validate([
            'pgm_name' => 'required',
        ]);
        Program::create($request->post());


        return redirect()->route('program.index')->with('success','Program has been added');
    }
    public function edit(Program $program){
        return view('program.edit',compact('program'));
    }
    public function update(Request $request,Program $program){
        $request->validate([
            'pgm_name' => 'required',
        ]);
        $program->fill($request->post())->save();


        return redirect()->route('program.index')->with('success','Program has been updated');
    }
    public function destroy(Program $program){
        $program->delete();
        return redirect()->route('program.index')->with('success','Program has been deleted');
    }
    public function show(Program $program){
        return view('program.show',compact('program'));
    }
}