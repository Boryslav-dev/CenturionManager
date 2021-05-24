<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
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

Route::post('/showContacts', [ContactController::class, 'showContacts']);
Route::post('/addContact', [ContactController::class, 'addContact']);
Route::post('/updateContact', [ContactController::class, 'updateContact']);
Route::post('/deleteContact', [ContactController::class, 'deleteContact']);
Route::post('/getOneContact', [ContactController::class, 'getOneContact']);
Route::post('/getByCategory', [ContactController::class, 'getByCategory']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
