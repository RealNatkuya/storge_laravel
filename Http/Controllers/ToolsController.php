<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tools;


class ToolsController extends Controller
{
    public function index(){
        $tools = Tools::all();
        return view('tools.index',compact('tools'));
    }
    public function create(){
        return view('tools.create');
    }
    public function store(Request $request){
        $request->validate([
            'tls_name' => 'required',
        ]);
        Tools::create($request->post());


        return redirect()->route('tools.index')->with('success','Tools has been added');
    }
    public function edit(Tools $tools){
        return view('tools.edit',compact('tools'));
    }
    public function update(Request $request,Tools $tools){
        $request->validate([
            'tls_name' => 'required',
        ]);
        $tools->fill($request->post())->save();


        return redirect()->route('tools.index')->with('success','Tools has been updated');
    }
    public function destroy(Tools $tools){
        $tools->delete();
        return redirect()->route('tools.index')->with('success','Tools has been deleted');
    }
    public function show(Tools $tools){
        return view('tools.show',compact('tools'));
    }
}
