<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
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
    Route::post('createMobil',[MobilController::class, 'store']);
    Route::put('updateMobil',[MobilController::class, 'update']);
    Route::delete('deleteMobil',[MobilController::class, 'destroy']);
    Route::get('soldMobil',[MobilController::class, 'sold']);
    Route::get('detailMobil/{id}',[MobilController::class, 'getDetail']);
    Route::post('createMotor',[MotorController::class, 'store']);
    Route::put('updateMotor',[MotorController::class, 'update']);
    Route::delete('deleteMotor',[MotorController::class, 'destroy']);
    Route::get('soldMotor',[MotorController::class, 'sold']);
    Route::get('detailMotor/{id}',[MotorController::class, 'getDetail']);
});


Route::group([
    'middleware'=>'api',
    'prefix'=>'/',
], function($router){
    Route::get('mobil',[MobilController::class, 'index']);
    Route::put('buymobil',[MobilController::class, 'buy']);
    Route::get('motor',[MotorController::class, 'index']);
    Route::put('buymotor',[MotorController::class, 'buy']);
});