<?php

namespace App\Http\Controllers;

use App\Models\MainModel;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function Index(){
        
    //     return view('client.index');
    // }
    public function Contact(){
        return view('client.contact');
    }
    public function Register(){
        return view('client.register');
    }
    public function Login(){
        return view('client.login');
    }
    public function Registeration(Request $request){
        $user=MainModel::where('email', $request->input('email'))->first();
        if(!$user){
        $reg= new MainModel();
        $reg->name= $request->input('name');
        $reg->email= $request->input('email');
        $reg->password= $request->input('password');
        $reg->role= $request->input('role');
        $reg->designation= $request->input('designation');
        $reg->save();
       return redirect('/');
    }else{
        return redirect()->back()->with('error', "User is already Register");
    }
    }
       
    public function tutorials(){
        
        return view('client.tutorials');
    }
    public function login1(Request $request){
        $user=MainModel::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
    if($user){
        if($user->role=="teacher"){
            session()->put('user_email', $user['email']);
            return redirect('/');
        }else{
            session()->put('user_email', $user['email']);
            return redirect('/tutorials');
        }
    
    }
    return redirect()->back()->with('error', "email/password is invalid");
    }
   public function Logout(){
    if(session()->has('user_email')){
        session()->forget('user_email');
        return redirect('/');
    }
   }
}
