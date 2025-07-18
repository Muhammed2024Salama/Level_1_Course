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
//Route::view('/mohamed','index');
//Route::redirect('/here','/there');
//Route::redirect('/there','https://github.com/Muhammed2024Salama');
Route::get('/ahmed',function (){
    return "Hello Ahmed Salama";
});
