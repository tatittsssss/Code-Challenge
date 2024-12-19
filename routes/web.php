<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('dashboard',function() {
//     return view('dashboard');
// });

Route::get('register', function(){
    return view('register');
});

Route::post('login', [loginController::class, 'login']);
Route::post('signup', [RegisterController::class, 'signup']);
Route::get('dashboard', [DashboardController::class, 'viewUser'])->name('dashboard');
