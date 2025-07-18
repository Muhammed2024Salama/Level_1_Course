<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mohamed', [\App\Http\Controllers\TestController::class,'mohamed']);

Route::get('/printName/{name?}', [\App\Http\Controllers\TestController::class,'printName'])->name('printMyName');

//Route::view('/mohamed','index');
//Route::redirect('/here','/there');
//Route::redirect('/there','https://github.com/Muhammed2024Salama');
//Route::get('/ahmed',function (){
//    return "Hello Ahmed Salama";
//});

// ROUTES GROUPS

//Route::controller(\App\Http\Controllers\TestController::class)->prefix('/test')->name('test.')->group(function (){
//    Route::get('/mohamed', 'mohamed')->name('index');
//
//    Route::get('/printName/{name?}', 'printName')->name('printMyName');
//});

Route::get('/hello',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/hello1',[\App\Http\Controllers\Users\UserController::class,'index']);
Route::get('/hello2',\App\Http\Controllers\SingleController::class);
Route::resource('/posts',\App\Http\Controllers\PostController::class);
