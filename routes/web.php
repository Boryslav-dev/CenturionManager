<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', [AuthController::class,'indexLogin']);
Route::post('/login/submit', [AuthController::class,'login']);

Route::get('/registration', [AuthController::class,'indexRegistration']);
Route::post('/registration/submit', [AuthController::class,'register']);

Route::get('/login', [AuthController::class,'indexLogin']);
Route::post('/login/submit', [AuthController::class,'login']);

Route::get('/contacts/{id}',[ContactController::class,'showContacts']);
