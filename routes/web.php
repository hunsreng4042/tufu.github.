<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CreateNew;

Route::get('/', function () {
    return view('login');
});

Route::post('/userlogin',[LoginController::class,'Login']);
Route::get('/dashboard',[DashboardController::class,'Dashboard']);
Route::get('/logout',[DashboardController::class,'Logout']);
Route::get('/inforpc',[DashboardController::class,'InforPC']);
Route::get('/profile',[DashboardController::class,'Profile']);
Route::get('/setting',[DashboardController::class,'Setting']);
Route::get('/system',[DashboardController::class,'System']);
Route::get('/users',[DashboardController::class,'Users']);
Route::get('/createusers',[CreateNew::class,'CreateUsers']);
Route::get('/createpc',[CreateNew::class,'CreatePC']);



//Add user
Route::post('/createuser',[CreateNew::class,'CreateUser']);
Route::post('/createpcnew',[CreateNew::class,'CreatePCNew']);
