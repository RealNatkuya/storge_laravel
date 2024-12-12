<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project_type;


class Project_typeController extends Controller
{
    public function index(){
        $project_types = Project_type::all();
        return view('project_type.index',compact('project_types'));
    }
    public function create(){
        return view('project_type.create');
    }
    public function store(Request $request){
        $request->validate([
            'pjt_name' => 'required',
        ]);
        Project_type::create($request->post());


        return redirect()->route('project_type.index')->with('success','Project_type has been added');
    }
    public function edit(Project_type $project_type){
        return view('project_type.edit',compact('project_type'));
    }
    public function update(Request $request,Project_type $project_type){
        $request->validate([
            'pjt_name' => 'required',
        ]);
        $project_type->fill($request->post())->save();


        return redirect()->route('project_type.index')->with('success','Project_type has been updated');
    }
    public function destroy(Project_type $project_type){
        $project_type->delete();
        return redirect()->route('project_type.index')->with('success','Project_type has been deleted');
    }


}
