<?php

namespace App\Http\Controllers;
use App\Principal;
use App\School;
use App\User;

use Illuminate\Http\Request;

class ZoneController extends Controller
{
    
    
    public function getUnwatchwedTimetables(){
        return view('User/Zone/Schools/unwatched_timetables');
    }
    public function postRegisterZone(Request $request){

        $this->validate($request , [
            'email' => 'required|email|unique:users',
            //'type' => 'required|max:20',
            'password' => 'required|min:4'
        ]);
        $email = $request['email'];
        $type = 'zone';
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->type = $type;
        $user->password = $password;
        $message = 'Registration Failed!!';
        if ($user->save()) {
            $message = 'Successfully Registered!!!';
        }
        //        Auth::login($user);
        return redirect()->back()->with(['message' => $message]);

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
