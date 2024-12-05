<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tools;


class ToolsController extends Controller
{
    public function index(){
        $tools = Tools::all();
        return view('tools.index',compact('tools'));
    }
}
