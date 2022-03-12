<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware'=>'api',
    'prefix'=>'auth',
], function($router){
    Route::post('login',[AuthController::class, 'login']);
    Route::post('profile',[AuthController::class, 'profile']);
    Route::post('logout',[AuthController::class, 'logout']);
});

Route::group([
    'middleware'=>'auth.role:admin',
    'prefix'=>'admin',
], function($router){
    Route::post('home',[AdminController::class, 'home']);
    
});

Route::group([
    'middleware'=>'auth.role:admin,user',
    'prefix'=>'vehicle',
], function($router){
    Route::post('mobil',[AuthController::class, 'login']);
    Route::post('motor',[AuthController::class, 'profile']);
});