<?php

namespace App\Http\Controllers;

use App\Clearance;
use App\Student;
use App\Registration;
use App\Faculty;
use App\Department;

use Illuminate\Http\Request;

class RegistrationApiController extends Controller
{
    public function getRegistrations($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $registration = Registration::where('student_id', $student->id)->get();
        return response()->json($registration);
    }

    public function getClearance($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $clearance = Clearance::where('student_id', $student->id)->get();
        return response()->json($clearance);
    }

    public function getClearances()
    {
        $clearances = Clearance::all();
        return response()->json($clearances);
    }

    public function getRegistrationCourses($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $registration = Registration::where('student_id', $student->id)->first();
        $courses = $registration->courses;
        return response()->json($courses);
    }

    public function getStudent($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $registration = Registration::where('student_id', $student->id)->first();
        return response()->json(
            [
                            // "id": 1,
                            "student_id" => $student->student_id,
                            "department" => $student->department->name,
                            "faculty" => $student->faculty->name,
                            "names" => $student->names,
                            "phone" => $student->phone,
                            "email" => $student->email,
                            "address" => $student->address,
                            "program" => $registration->program ?? null,
                            "semester" => $registration->semester ?? null,
                            "farg" => $student->farg
            ]
        );
    }

    public function getStudentFaculty($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $faculty = Faculty::where('id', $student->faculty_id)->get();
        return response()->json($faculty);
    }

    public function getStudentDepartment($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $department = Department::where('id', $student->department_id)->get();
        return response()->json($department);
    }
}
