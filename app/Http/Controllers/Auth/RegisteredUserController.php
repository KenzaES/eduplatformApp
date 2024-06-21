<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role; // Import Role model if using Laratrust or similar
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'role' => ['required', 'string', 'in:admin,instructor,learner'], 
    ]);

       // Handle profile picture upload
    $profilePicturePath = null;
    if ($request->hasFile('profile_picture')) {
        $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'profile_picture' => $profilePicturePath, // Store profile picture path
    ]);

       // Assign role based on the selected role
    $role = Role::where('name', $request->role)->first(); // Retrieve the role
    if ($role) {
        $user->attachRole($role); // Attach the role to the user
    }

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
    }
}
