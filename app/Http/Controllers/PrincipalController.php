<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;

class PrincipalController extends Controller
{
    public function getSchoolTimetableClass(){
        return view('User/Principal/SchoolTimetable/school_timetable_class_for_principal');
    }
    public function getSchoolTimetableTeacher(){
        return view('User/Principal/SchoolTimetable/school_timetable_teacher_for_principal');
    }
    public function getRegisterTeacher(){
        $teachers = Teacher::all(['title','name' ,'position']);
        return view('User/Principal/TeacherDetails/register_teacher', ['teachers'=>$teachers]);
    }
    public function getRegisterGrades(){
        return view('User/Principal/GradeDetails/register_grades');
    }
    public function getTeacherList(){
        $teachers = Teacher::all(['title','name' ,'position']);
        return view('User/Principal/TeacherDetails/teacher_list', ['teachers'=>$teachers]);
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
