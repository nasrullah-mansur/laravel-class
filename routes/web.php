<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/test', [TestController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create']);

Route::get('/user/all', [UserController::class, 'index']);
Route::get('/user/update', [UserController::class, 'update']);
Route::get('/user/delete', [UserController::class, 'delete']);

// php artisan serve 
// php artisan make controller ControllerName
// php artisan migrate


