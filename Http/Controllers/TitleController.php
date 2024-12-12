<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Title;


class TitleController extends Controller
{
    public function index(){
        $titles = Title::all();
        return view('title.index',compact('titles'));
    }
    public function create(){
        return view('title.create');
    }
    public function store(Request $request){
        $request->validate([
            'ttl_name' => 'required',
        ]);
        Title::create($request->post());


        return redirect()->route('title.index')->with('success','Title has been added');
    }
    public function edit(Title $title){
        return view('title.edit',compact('title'));
    }
    public function update(Request $request,Title $title){
        $request->validate([
            'ttl_name' => 'required',
        ]);
        $title->fill($request->post())->save();


        return redirect()->route('title.index')->with('success','Title has been updated');
    }
    public function destroy(Title $title){
        $title->delete();
        return redirect()->route('title.index')->with('success','Title has been deleted');
    }
    public function show(Title $title){
        return view('title.show',compact('title'));
    }
}
