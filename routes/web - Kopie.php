<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BenutzerController;
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
Route::get('/log', [BenutzerController::class, 'index']);
#Route::post('/log/login', [BenutzerController::class, 'benutzerLogin']);
Route::post('/log/login', [BenutzerController::class, 'benutzerLogin'])->name('log.submit');

Route::get('/', [TestController::class, 'index']);

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/project', function(){
    return view('project');
});
