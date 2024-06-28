<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\UserRegisterationController;
use App\Http\Controllers\userController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\ModuleController;
use App\Http\Controllers\Instructor\CoursesListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentification routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/instructor/dashboard', function () {
        return view('instructor.dashboard');
    })->name('instructor.dashboard');

    Route::get('/learner/dashboard', function () {
        return view('learner.dashboard');
    })->name('learner.dashboard');

    //redirect user after registration to dashborad/index i should change it to welcome page
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';

// display users from users table in admin dashboard
Route::get('/admin/dashboard',
[RegisteredUserController::class,'createAdminAddForm'
])->name('admin.dashboard');

// display user instructor at welcome page
Route::get('welcome', [App\Http\Controllers\userController::class, 'showWelcomePage'])->name('welcome');




// Manage users by admin
// Route for displaying the add user form
Route::get('/admin/register', [App\Http\Controllers\Admin\UserRegistrationController::class, 'showRegistrationForm'])->name('admin.register.form');

// Route for handling the user registration
Route::post('/admin/register', [App\Http\Controllers\Admin\UserRegistrationController::class, 'register'])->name('admin.register');

// Route for displaying the update user form
Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\UserRegistrationController::class, 'edit'])->name('admin.users.edit');

// Route for handling the user update
Route::put('/admin/users/{user}', [App\Http\Controllers\Admin\UserRegistrationController::class, 'update'])->name('admin.users.update');

// Route for handling the user deletion
Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserRegistrationController::class, 'destroy'])->name('admin.users.destroy');




// instructors route

// route to redirect to view of courses creation
Route::get('/instructor/create-courses', [App\Http\Controllers\InstructorController::class, 'createCourses'])->name('create.courses');

// show Courses
Route::get('/instructor/courses-list', [App\Http\Controllers\InstructorController::class, 'showCourses'])->name('show.courses');


// Route for showing the form to create modules for a specific course
// Route::get('/instructor/create-modules/{course_id}', [ModuleController::class, 'create'])->name('modules.create');

// Route for displaying the page to create modules
Route::get('/instructor/create-modules/{course_id}', [App\Http\Controllers\InstructorController::class, 'createModules'])->name('create.modules');

// Route::post('/modules', 'App\Http\Controllers\Instructor\ModuleController@store')->name('modules.store');

// Route::get('/instructor/create-modules/{course_id}', 'Instructor\ModuleController@create')->name('create.modules');
// Route::post('/instructor/modules', 'App\Http\Controllers\Instructor\ModuleController@store')->name('modules.store');

Route::match(['get', 'post'],'/instructor/modules', 'App\Http\Controllers\Instructor\ModuleController@store')->name('store.modules');

Route::get('/instructor/create-modules/{course_id}', 'App\Http\Controllers\Instructor\ModuleController@createModules')
    ->name('create.modules');
// CRUD instructor
Route::post('/courses', 'App\Http\Controllers\Instructor\CourseController@store')->name('courses.store');


Route::get('/instructor/courses-list', [CoursesListController::class, 'showCoursesList'])
    ->name('show.courses');

Route::delete('/instructor/courses/{id}', [CoursesListController::class, 'deleteCourse'])->name('delete.course');

//edit and update routes 
Route::get('/instructor/courses/{id}/edit', [CoursesListController::class, 'editCourse'])->name('edit.course');
Route::put('/instructor/courses/{id}', [CoursesListController::class, 'updateCourse'])->name('update.course');

//cards course page
Route::get('/instructor/courses-cards', [CoursesListController::class, 'showCoursesCards'])
    ->name('show.cards');

//course detail page
Route::get('/instructor/courses-detail/{id}', [CoursesListController::class, 'showCoursesDetail'])->name('show.detail');

// Route::get('/instructor/courses-detail/{id}/enroll', [CourseController::class, 'enroll'])->name('enroll');
    


