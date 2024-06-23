<?php 
// App\Http\Controllers\Auth\AuthenticatedSessionController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Add this line to import Log

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Get the authenticated user
        $user = Auth::user();

        // Get the user's roles using Laratrust
        $roles = $user->roles->pluck('name')->toArray();
        Log::info('User roles: ' . implode(',', $roles));

        // Redirect based on roles
        if (in_array('admin', $roles)) {
            Log::info('Redirecting to admin dashboard');
            return redirect()->route('admin.dashboard');
        } elseif (in_array('instructor', $roles)) {
            Log::info('Redirecting to instructor dashboard');
            return redirect()->route('instructor.dashboard');
        } elseif (in_array('learner', $roles)) {
            Log::info('Redirecting to learner dashboard');
            return redirect()->route('learner.dashboard');
        } else {
            Log::info('Redirecting to default dashboard');
            return redirect()->route('dashboard'); // Default redirect
        }
    }


    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
