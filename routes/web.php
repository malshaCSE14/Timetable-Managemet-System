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
//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/view', function () {
//    return view('view');
//});

Route::get('/user-view', function () {
    return view('User/user_view');
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
//Route::get('/sample-login', function () {
//    return view('User/sample_login');
//});
Route::group(['middleware' => ['web']] ,function (){
    Route::get('/', function () {
        return view('User/login');
    });
    Route::post('/register',[
        'uses' => 'UserController@postRegister',
        'as' => 'register'
    ]);
    Route::post('/login',[
        'uses' => 'UserController@postLogin',
        'as' => 'login'
    ]);
    Route::get('/view',[
        'uses' => 'UserController@getView',
        'as' => 'view'
    ]);
    Route::get('/teacher-timetable', [
        'uses' => 'UserController@getTeacherTimetable',
        'as' => 'teacher-timetable'
    ]);
    Route::get('/school-timetable',[
        'uses' => 'UserController@getSchoolTimetable',
        'as' => 'school-timetable'
    ]);
    Route::get('/school-list',[
        'uses' => 'UserController@getSchoolList',
        'as' => 'school-list'
    ]);

});