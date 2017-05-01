<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\User;

class SchoolController extends Controller
{
    public function getSchoolList(){
        $schools = School::all(['school_name', 'principal_name']);
        //$principals = Principal::all(['title', 'name']);
        return view('User/Zone/Schools/school_list', ['schools'=>$schools]);
    }
    public function getRegisterSchool(){
        $schools = School::all(['school_name','principal_name']);
        //$principals = Principal::all(['title', 'name']);
        return view('User/Zone/Schools/register_school', ['schools'=>$schools]);
    }
    public function postSchoolRegister(Request $request){
        $this->validate($request , [
            'email' => 'required|email|unique:users',
            'name' => 'required|max:150',
            'title' => 'required|max:5',
            'school_name' => 'required|unique:schools'
        ]);
        $school_name = $request['school_name'];
        $title = $request['title'];
        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt('12345');

        $user = new User();
        $user->email = $email;
        $user->type = "principal";
        $user->password = $password;
        $user->save();

        $school = new School();
        $school->school_name = $school_name;
        $school->title = $title;
        $school->principal_name = $name;


        //$principal = new Principal();

        //$request->school()->principal()->save($principal);
//        $principal->save();
//         Auth::login($user);

        $message = 'There was an error';
        if ($school->save()) {
            $message = 'Post successfully created!';
        }
        return redirect()->back()->with(['message' => $message]);

    }

    public function postEditSchool(Request $request)
    {
        $this->validate($request, [
            //validation of the school details
        ]);
        //find the school with the schoolID
        $post = Post::find($request['postId']);
//        if (Auth::user() != $post->user) {
//            return redirect()->back();
//        }
        //assign all the edited and unedited fields again
        $post->body = $request['body'];
        //update the school
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }
    public function getDeleteSchool(School $school_id){
        $school = School::where('id', $school_id)->first();
            //if confirmation message is ok.. delete post
        $school->delete();
        return redirect()->back();
//        return redirect()->back()->with(['message' => 'Successfully deleted!']);
    }
}
