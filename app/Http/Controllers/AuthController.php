<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view ('auth.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'name'=>'required|exists:users',
            'password'=>'required'
        ]);
        $name=$request['name'];
        $password=$request['password'];
        if(Auth::attempt(['name'=>$name, 'password'=>$password])){
            return redirect()->route('dashboard');

        }else{
            return redirect()->back()->with('error','User login failed.');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
