<?php

namespace App\Http\Controllers;

use App\Models\Tutorials;
use Illuminate\Http\Request;

class TutorialController extends Controller
{ 
    public function Index(){
        $tut=Tutorials::all();
        return view('client.index', compact('tut'));
    }

    public function CreateTutorials(Request $request){
        $tut=new Tutorials();
        $tut->title=$request->input('title');
        $tut->description=$request->input('description');
        $tut->duration=$request->input('duration');
        $tut->image=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/',$tut->image);
        $tut->save();
        return redirect()->back()->with('success', "Successfully Your Tutorial Created");
    }
}
