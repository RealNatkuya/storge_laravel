<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Project_status;


class Project_statusController extends Controller
{
    public function index(){
        $project_status = Project_status::all();
        return view('project_status.index',compact('project_status'));
    }
}
