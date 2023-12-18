<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationApiController;

use App\Http\Controllers\Api\V2\RegistrationApiController as V2RegistrationApiController;

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




Route::get('/v2/auca/semester/current', 'V2RegistrationApiController@getCurrentSemester');

Route::get('/v2/auca/student/{student_id}', 'V2RegistrationApiController@getStudent');

Route::get('/v2/auca/registration/{student_id}', 'V2RegistrationApiController@getStudentRegistration');

Route::get('/v2/auca/teacher/{email}', 'V2RegistrationApiController@getTeacher');

Route::get('/v2/auca/teacher/{email}/courses', 'V2RegistrationApiController@getTeacherCourses');

Route::get('/v2/auca/registration/courses/{student_id}', 'V2RegistrationApiController@getRegistrationCourses');

Route::get('/v2/auca/student/faculty/{student_id}', 'V2RegistrationApiController@getStudentFaculty');

Route::get('/v2/auca/student/department/{student_id}', 'V2RegistrationApiController@getStudentDepartment');
