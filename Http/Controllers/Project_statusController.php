<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project_status;


class Project_statusController extends Controller
{
    public function index(){
        $project_statuss = Project_status::all();
        return view('project_status.index',compact('project_statuss'));
    }
    public function create(){
        return view('project_status.create');
    }
    public function store(Request $request){
        $request->validate([
            'pjs_name' => 'required',
        ]);
        Project_status::create($request->post());


        return redirect()->route('project_status.index')->with('success','Project_status has been added');
    }
    public function edit(Project_status $project_status){
        return view('project_status.edit',compact('project_status'));
    }
    public function update(Request $request,Project_status $project_status){
        $request->validate([
            'pjs_name' => 'required',
        ]);
        $project_status->fill($request->post())->save();


        return redirect()->route('project_status.index')->with('success','Project_status has been updated');
    }
    public function destroy(Project_status $project_status){
        $project_status->delete();
        return redirect()->route('project_status.index')->with('success','Project_status has been deleted');
    }
    public function show(Project_status $project_status){
        return view('project_status.show',compact('project_status'));
    }
}
