<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getTeacherTimetable(){
        return view('User/Teacher/TeacherView/teacher_timetable');
    }
    public function getSchoolTimetable(){
        return view('User/Principal/SchoolTimetable/school_timetable');
    }
    public function getSchoolList(){
        return view('User/Zone/Schools/school_list');
    }
    public function postRegister(Request $request){
        $email = $request['email'];
        $type = $request['type'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->type = $type;
        $user->password = $password;
        $user->save();

//        Auth::login($user);
        return redirect()->route('view');

    }
    public function postLogin(Request $request){
        if(Auth::attempt(['email'=>$request['email'] ,'password'=>$request['password'] ,'type'=>'teacher'])){
            return redirect()->route('teacher-timetable');
        }
        elseif(Auth::attempt(['email'=>$request['email'] ,'password'=>$request['password'] ,'type'=>'principal'])){
            return redirect()->route('school-timetable');
        }
        elseif(Auth::attempt(['email'=>$request['email'] ,'password'=>$request['password'] ,'type'=>'zone'])){
            return redirect()->route('school-list');
        }
        return redirect()->back();

    }
}
