<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    public function createModules($course_id)
{
    // You can fetch additional data related to the course if needed
    $data = [
        'course_id' => $course_id,
        // Add other data if necessary
    ];

    return view('instructor.CreateModules', $data);
}
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'moduleNumber' => 'required|integer',
            'title' => 'required|string|max:255',
            'video' => 'nullable|url',
            'content' => 'required|string',
            'module_image' => 'nullable|image|max:10240',
            'course_id' => 'required|integer',
        ]);
        // Handle file upload if an image is present
        if ($request->hasFile('module_image')) {
            $image = $request->file('module_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['module_image'] = $imageName;
        }

        // Assign the course_id
        $validatedData['course_id'] = $request->input('course_id');
        $validatedData['user_id'] = auth()->id();

        // Create the module using the validated data
        Module::create($validatedData);

        // Determine the action based on submit_action value
        if ($request->input('submit_action') === 'add_more') {
            return redirect()->route('create.modules', ['course_id' => $validatedData['course_id']])
                             ->with('success', 'Module added successfully!');
        } else {
            return redirect()->route('show.courses')->with('success', 'Module added successfully!');
        }
    }
}
