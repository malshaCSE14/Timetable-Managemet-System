<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getDashboard(){
        return view('dashboard');
    }
    public function postSignUp(Request $request){
        $username = $request['username'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->save();

        Auth::login($user);
        return redirect()->route('dashboard');

    }
    public function postSignIn(Request $request){
        if(Auth::attempt(['username'=>$request['username'] ,'password'=>$request['password']])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();

    }
}
