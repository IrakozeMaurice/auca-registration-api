<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/auca/registration/{student_id}', 'RegistrationApiController@getRegistrations');

Route::get('/auca/clearance/{student_id}', 'RegistrationApiController@getClearance');

Route::get('/auca/clearances', 'RegistrationApiController@getClearances');

Route::get('/auca/registration/courses/{student_id}', 'RegistrationApiController@getRegistrationCourses');

Route::get('/auca/student/{student_id}', 'RegistrationApiController@getStudent');

Route::get('/auca/student/faculty/{student_id}', 'RegistrationApiController@getStudentFaculty');

Route::get('/auca/student/department/{student_id}', 'RegistrationApiController@getStudentDepartment');
