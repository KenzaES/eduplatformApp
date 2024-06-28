<?php
namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
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

        // Handle file upload if an image is present
        if ($request->hasFile('course_image')) {
            $image = $request->file('course_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['course_image'] = $imageName;
        }

        // Add user ID to the validated data
        $validatedData['user_id'] = auth()->id();

        // Create a new course record
        $course = Course::create($validatedData);

       // After creating the course successfully
       return redirect()->route('modules.create', ['course_id' => $course->id])
       ->with('success', 'Course created successfully!');

    }
}