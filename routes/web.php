<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/registeration',[RegisterController::class, 'register'])->name('register');
Route::get('/updateuser',[RegisterController::class, 'RegisterUser']);
Route::get('/loginpage',[LoginController::class, 'LoginPage']);
Route::post('/registersubmit',[RegisterController::class, 'RegisterSubmit']);
Route::get('/data1',[RegisterController::class, 'showData']);
Route::post('/loginpage',[LoginController::class, 'LoginFetch']);
Route::get('loginsuccess',[LoginController::class, 'LoginDisplay']);
Route::get('{id}/delete',[RegisterController::class,'DeleteStudent']);
Route::get('{id}/update',[RegisterController::class,'updateStudent']);
Route::post('{id}/updatesubmit',[RegisterController::class, 'UpdateSubmit']);







