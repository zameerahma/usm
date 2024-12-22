<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // public function AddTutorials(Request $request){
    //     $tut=new Turoial();
    //     $tut->title=$request->input('title');
    //     $tut->image=$request->file('image')->getClientOriginalName();
    //     $request->file('image')->move('uploads/', $tut->image);
    //     $tut->duration=$request->input('duration');
    //     $tut->description=$request->input('description');
    //     $tut->save();
    //     return redirect()->back()->with('success',"Tutorial added successfully.");
    // }
    // public function logout(){
    //     if(session()->has('user_name')){
    //         session()->forget('user_name');
    //         return redirect('/Login');
    //     }
    // }
    // public function login1(Request $request){
    //     $log= MainModel::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
    //     if($log){

    //         if($log->role=="teacher"){
    //         session()->put('user_name', $log['name']);
    //         return redirect('/');
            
    //     }else{
    //         session()->put('user_name', $log['name']);
    //         return redirect('/');
    //     }
    // }
    //     return redirect()->back()->with('error','Your email or password invaild');
    // }
   // $user=MainModel::where('email',$request->input('email'))->first();
}
