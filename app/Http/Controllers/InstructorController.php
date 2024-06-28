<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function createCourses()
    {
        return view('instructor.createCourses');
    }

    public function showCourses()
    {
        return view('instructor.CoursesList');
    }

    public function createModules()
    {
        return view('instructor.createModules');
    }
}
