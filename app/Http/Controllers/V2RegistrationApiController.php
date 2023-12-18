<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Student;
use App\Registration;
use App\Semester;
use App\Teacher;

class V2RegistrationApiController extends Controller
{

    public function getStudentRegistration($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();

        $registration = Registration::whereHas('semester', function ($query) {
            $query->where('start_date', '<=', now()->format('Y-m-d'))
                ->where('end_date', '>=', now()->format('Y-m-d'));
        })->where('student_id', $student->id)->first();

        if ($registration) {

            return response()->json(([
                "rollno" => $registration->student->student_id,
                "semester_name" => $registration->semester->name,
                "semester_start_date" => $registration->semester->start_date,
                "semester_end_date" => $registration->semester->end_date,
                "courses" => $registration->courses,
            ]));
        }

        return null;
    }

    public function getStudent($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        if ($student) {

            return response()->json(
                [
                    "rollno" => $student->student_id,
                    "names" => $student->names,
                    "email" => $student->email,
                    "phone" => $student->phone,
                    "faculty" => $student->faculty->name,
                    "department" => $student->department->name,
                    "program" => $student->program->name,
                ]
            );
        }
        return null;
    }

    public function getTeacher($email)
    {
        $teacher = Teacher::where('email', $email)->first();
        if ($teacher) {

            return response()->json(
                [
                    "names" => $teacher->names,
                    "email" => $teacher->email,
                    "phone" => $teacher->phone,
                ]
            );
        }
        return null;
    }

    public function getTeacherCourses($email)
    {
        $teacher = Teacher::where('email', $email)->first();
        if ($teacher) {

            return response()->json(
                [
                    "courses" => $teacher->courses
                ]
            );
        }
        return null;
    }

    public function getCurrentSemester()
    {
        $semester = Semester::where('start_date', '<=', now()->format('Y-m-d'))
            ->where('end_date', '>=', now()->format('Y-m-d'))
            ->first();

        if ($semester) {

            return response()->json($semester);
        }

        return null;
    }
}
