<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Project_type;


class Project_typeController extends Controller
{
    public function index(){
        $project_type = Project_type::all();
        return view('project_type.index',compact('project_type'));
    }
}