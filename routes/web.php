<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/user-view', function () {
    return view('User/user_view');
});
Route::get('/teacher-timetable', function () {
    return view('User/Teacher/TeacherView/teacher-timetable');
});
Route::get('/teacher-details', function () {
    return view('User/Principal/TeacherDetails/teacher_details_entry');
});
Route::get('/grade-details', function () {
    return view('User/Principal/GradeDetails/grade_details');
});
Route::get('/login', function () {
    return view('User/login');
});
Route::group(['middleware' => ['web']] ,function (){
    Route::post('/signup',[
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);
    Route::post('/login',[
        'uses' => 'UserController@postSignIn',
        'as' => 'login'
    ]);
    Route::get('/dashboard',[
        'uses'=> 'UserController@getDashboard',
        'as' => 'dashboard'
    ]);
});