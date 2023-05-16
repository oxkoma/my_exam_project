<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
    return view('/page/home');
});
Route::get('/about', function () {
    return view('/page/about');
});

Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('menus', MenuController::class);
Route::resource('groups', GroupController::class);
Route::resource('users', UserController::class);

Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');
    
    Route::get('/login', function(){
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', function() {
        Auth::logout();
        return redirect(route('user.private'));
    })->name('logout');

    Route::get('/registration',function(){
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [RegistrationController::class, 'save']);
});

Route::get('list', [StudentController::class, 'view']);
Route::get('list/{group_id}', [StudentController::class, 'sort']);