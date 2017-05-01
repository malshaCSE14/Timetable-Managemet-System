<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getProfile(){
        return view('User/Teacher/Profile/profile');
    }
    public function getTeacherTimetable(){
        return view('User/Teacher/Timetables/teacher_timetable');
    }
    public function getSchoolTimetableClass(){
        return view('User/Teacher/Timetables/school_timetable_class_for_teacher');
    }
    public function getSchoolTimetableTeacher(){
        return view('User/Teacher/Timetables/school_timetable_teacher_for_teacher');
    }
    public function postRegisterTeacher(Request $request){
        $positions = array("Principal","Vice Principal","Assistant Principal","Supervisor","Adviser (students greater than 300)","Adviser (students less than 300)","Class Teacher","Subject Head","Teacher");
        $periods = array(
            $positions[0]=>0,
            $positions[1]=>10,
            $positions[2]=>12,
            $positions[3]=>16,
            $positions[4]=>0,
            $positions[5]=>15,
            $positions[6]=>33,
            $positions[7]=>33,
            $positions[8]=>35);
        $this->validate($request , [
            'email' => 'required|email|unique:users',
            'title' => 'required|max:5',
            'name' => 'required|max:150'
        ]);

        $title = $request['title'];
        $name = $request['name'];
        $position = $request['position'];
        $email = $request['email'];
        $maximun_periods = $periods[$request['position']];
        $password = bcrypt('12345');

        $user = new User();
        $user->email = $email;
        $user->type = "teacher";
        $user->password = $password;
        $user->save();

        $teacher = new Teacher();
        $teacher->title = $title;
        $teacher->name = $name;
        $teacher->position = $position;
        $teacher->maximum_periods = $maximun_periods;
        $teacher->save();

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
