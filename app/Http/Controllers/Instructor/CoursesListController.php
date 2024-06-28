<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Module; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cohensive\OEmbed\Facades\OEmbed;

class CoursesListController extends Controller
{
    public function showCoursesList()
    {
       // Fetch courses with module counts
       $courses = Course::withCount('modules')->get();

       // Fetch the current user
       $user = Auth::user();

       // Count the number of courses associated with this user
       $userCourseCount = $user->courses()->count();

        return view('instructor.CoursesList', compact('courses','userCourseCount'));
    }

    // show course in cards for instructor
    public function showCoursesCards() {
        // Fetch the current user
        $user = Auth::user();
    
        // Fetch courses belonging to the current instructor
            
       $courses = $user->courses()->with('instructor')->get();

    return view('instructor.CoursesCards', compact('courses'));
    }
    
 // show course in cards for instructor
 public function showCoursesDetail($id)
 {
     $user = Auth::user();
     $course = Course::findOrFail($id);
     $modules = $course->modules; // Assuming you have a relationship defined in the Course model
     // Loop through modules to embed videos if available
    

     return view('instructor.CoursesDetail', compact('course', 'modules', 'user'));
 }
    



    // edit form
    public function editCourse($id)
{
    $course = Course::findOrFail($id);
    return view('instructor.editCourse', compact('course'));
}

    // update course function
    public function updateCourse(Request $request, $id)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'duration' => 'required|string|max:10',
            'language' => 'required|string|max:255',
            'complexity' => 'required|string|max:255',
            'price' => 'required|numeric',
            'requirement' => 'required|string',
            'description' => ['required', 'string'],
            'course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Find the course and update its details
        $course = Course::findOrFail($id);
    
        // Update course attributes
        $course->title = $validatedData['title'];
        $course->category = $validatedData['category'];
        $course->duration = $validatedData['duration'];
        $course->language = $validatedData['language'];
        $course->complexity = $validatedData['complexity'];
        $course->price = $validatedData['price'];
        $course->requirement = $validatedData['requirement'];
        $course->description = $validatedData['description'];
    
        // Handle course_image upload
        if ($request->hasFile('course_image')) {
            $imagePath = $request->file('course_image')->store('images', 'public');
            $course->course_image = $imagePath;
        }
    
        // Save the course
        $course->save();
    
        return redirect()->route('show.courses')->with('success', 'Course updated successfully!');
    }
    
    
    // delete course for instructor
    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('show.courses')->with('success', 'Course and its modules deleted successfully!');
    }


}
