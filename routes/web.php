<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BenutzerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FormularController;

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
Route::resource('users', UserController::class);

Route::resource('post', PostController::class);
Route::get('/post/del/{id}', [PostController::class, 'showDelete']);

Route::get('/log', [BenutzerController::class, 'index']);

Route::post('/log/login', [BenutzerController::class, 'benutzerLogin'])->name('log.submit');

Route::get('/', [TestController::class, 'index']);

Route::get('/contact', function(){
   return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gallery', [GalleryController::class, 'showGallery']);

Route::get('/formular', [FormularController::class, 'index']);
Route::post('/formular', [FormularController::class, 'submit']);


require __DIR__.'/auth.php'; 
