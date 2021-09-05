<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coursecontroller;
use App\Http\Controllers\applicationcontroller;
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

Route::get('/courses',[coursecontroller::class,'create']);
Route::post('/coursestore',[coursecontroller::class,'store']);
Route::get('/courses',[coursecontroller::class,'index']);
Route::get('/',[applicationcontroller::class,'create']);
Route::post('/applicationstore',[applicationcontroller::class,'store']);
Route::get('/applicationview',[applicationcontroller::class,'index']);
route::get('/',[applicationcontroller::class,'getAllGenre']);
route::post('/coursedeleteprocess/{id}',[coursecontroller::class,'destroy']);
route::get('/coursedelete/{id}', [coursecontroller::class,'deleteview']);
/*

Route::get('/', function () {
    return view('application');
});*/
