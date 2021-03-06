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
Route::get('/register-zone', function () {
    return view('User/register_zone');
});
Route::resource('schools', 'SchoolController');

Route::get('/user-view', function () {
    return view('User/user_view');
});
Route::get('/zone-view', function () {
    return view('User/Zone/zone_view');
});
Route::get('/principal-view', function () {
    return view('User/Principal/principal_view');
});
Route::get('/teacher-view', function () {
    return view('User/Teacher/teacher_view');
});
//Route::get('/teacher-details', function () {
//    return view('User/Principal/TeacherDetails/teacher_details_entry');
//});
//Route::get('/grade-details', function () {
//    return view('User/Principal/GradeDetails/grade_details');
//});
Route::get('/login', function () {
    return view('User/login');
});

Route::group(['middleware' => ['web']] ,function (){
    Route::post('/register-zone-post',[
        'uses' => 'ZoneController@postRegisterZone',
        'as' => 'register-zone-post'
    ]);
    Route::get('/', function () {
        return view('User/login');
    })->name('home');
    Route::post('/login',[
        'uses' => 'UserController@postLogin',
        'as' => 'login'
    ]);
    Route::get('/school-list',[
        'uses' => 'SchoolController@getSchoolList',
        'as' => 'school-list'
    ]);
    Route::get('/register-school',[
        'uses' => 'SchoolController@getRegisterSchool',
        'as' => 'register-school'
    ]);
    Route::post('/register-school-post',[
        'uses' => 'SchoolController@postSchoolRegister',
        'as' => 'register-school-post'
    ]);
    Route::get('/delete-school/{school_id}',[
        'uses' => 'SchoolController@getDeleteSchool',
        'as' => 'school.delete'
    ]);
    
    
    Route::get('/view',[
        'uses' => 'UserController@getView',
        'as' => 'view'
    ]);
    Route::get('/teacher-timetable', [
        'uses' => 'UserController@getTeacherTimetable',
        'as' => 'teacher-timetable',
        'middleware' => 'auth'
    ]);
    Route::get('/school-timetable',[
        'uses' => 'UserController@getSchoolTimetable',
        'as' => 'school-timetable'
    ]);
    
    

    Route::get('/unwatched-timetables',[
        'uses' => 'ZoneController@getUnwatchwedTimetables',
        'as' => 'unwatched-timetable'
    ]);
    Route::get('/school-timetable-class-for-principal',[
        'uses' => 'PrincipalController@getSchoolTimetableClass',
        'as' => 'school-timetable-class-for-principal'
    ]);
    Route::get('/school-timetable-teacher-for-principal',[
        'uses' => 'PrincipalController@getSchoolTimetableTeacher',
        'as' => 'school-timetable-teacher-for-principal'
    ]);
    Route::get('/register-teacher',[
        'uses' => 'PrincipalController@getRegisterTeacher',
        'as' => 'register-teacher'
    ]);

    Route::post('/register-grade-post',[
        'uses' => 'GradeController@postRegisterGrade',
        'as' => 'register-grade-post'
    ]);
     Route::post('/register-teacher-post',[
         'uses' => 'PrincipalController@postRegisterTeacher',
         'as' => 'register-teacher-post'
     ]);
    Route::get('/register-grades',[
        'uses' => 'PrincipalController@getRegisterGrades',
        'as' => 'register-grades'
    ]);
    Route::get('/teacher-list',[
        'uses' => 'PrincipalController@getTeacherList',
        'as' => 'teacher-list'
    ]);

    Route::get('/teacher-profile',[
        'uses' => 'TeacherController@getProfile',
        'as' => 'teacher-profile'
    ]);
    Route::get('/teacher-timetable',[
        'uses' => 'TeacherController@getTeacherTimetable',
        'as' => 'teacher-timetable'
    ]);
    Route::get('/school-timetable-class-for-teacher',[
        'uses' => 'TeacherController@getSchoolTimetableClass',
        'as' => 'school-timetable-class-for-teacher'
    ]);
    Route::get('/school-timetable-teacher-for-teacher',[
        'uses' => 'TeacherController@getSchoolTimetableTeacher',
        'as' => 'school-timetable-teacher-for-teacher'
    ]);
    Route::resource('teacher','TeacherController');
    Route::resource('principal','TeacherController');
});