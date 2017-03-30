<?php

namespace App\Http\Controllers;
use App\Principal;
use App\School;
use App\User;

use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function getSchoolList(){
        $schools = School::all(['school_name']);
        $principals = Principal::all(['title', 'name']);
        return view('User/Zone/Schools/school_list', ['schools'=>$schools], ['principals'=>$principals]);
    }
    public function getRegisterSchool(){
        $schools = School::all(['school_name']);
        $principals = Principal::all(['title', 'name']);
        return view('User/Zone/Schools/register_school', ['schools'=>$schools], ['principals'=>$principals]);
    }
    public function getUnwatchwedTimetables(){
        return view('User/Zone/Schools/unwatched_timetables');
    }

    public function postSchoolRegister(Request $request){
        $school_name = $request['school_name'];
        $title = $request['title1'];
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
        $school->save();
        $principal = new Principal();
        $principal->title = $title;
        $principal->name = $name;
        $principal->save();
//        Auth::login($user);
        return redirect()->back();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
