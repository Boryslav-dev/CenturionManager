<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/showCategories', [CategoryController::class, 'showCategories']);
Route::post('/addCategory', [CategoryController::class, 'addCategory']);
Route::post('/updateCategory', [CategoryController::class, 'updateCategory']);
Route::post('/deleteCategory', [CategoryController::class, 'deleteCategory']);

Route::get('/showContacts', [ContactController::class, 'showContacts']);
Route::post('/showContacts', [ContactController::class, 'showContacts']);
Route::post('/addContact', [ContactController::class, 'addContact']);
Route::post('/updateContact', [ContactController::class, 'updateContact']);
Route::post('/deleteContact', [ContactController::class, 'deleteContact']);
Route::post('/getOneContact', [ContactController::class, 'getOneContact']);
Route::post('/getByCategory', [ContactController::class, 'getByCategory']);

Route::post('/getAllData', [TransferController::class, 'getAllData']);
Route::post('/setData', [TransferController::class, 'setData']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/update', [UserController::class, 'update']);
Route::post('/resetPassword', [UserController::class, 'resetPassword']);
//Route::group(['middleware' => ['auth:sanctum']], function () {
//    Route::get('/logout', [AuthController::class, 'logout']);
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
