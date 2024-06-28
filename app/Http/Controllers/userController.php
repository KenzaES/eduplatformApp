<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    public function showWelcomePage()
    {
        $users = User::all(); // Adjust this query as per your application logic
    
        return view('welcome', compact('users'));
    }
}
