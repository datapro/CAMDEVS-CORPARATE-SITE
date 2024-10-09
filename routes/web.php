<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FeedingController;
use App\Http\Controllers\BusinessController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/index', [ContactController::class, 'contact']);

Route::post('/index', [ContactController::class, 'send'])->name('index');
Route::post('/', [ContactController::class, 'subscribe'])->name('subscribe');

Route::get('/join', [PageController::class, 'join']);
Route::get('/feed', [PageController::class, 'feed']);
Route::get('/scholars', [PageController::class, 'scholars']);
Route::get('/sme', [PageController::class, 'sme']);
Route::get('/training', [PageController::class, 'training']);
Route::get('/farmers', [PageController::class, 'farmers']);

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'send']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users']);
Route::delete('/users/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
Route::get('/skill', [App\Http\Controllers\MemberController::class, 'skill']);
Route::get('/feeding', [App\Http\Controllers\FeedingController::class, 'index']);
Route::get('/agro', [App\Http\Controllers\FeedingController::class, 'agro']);
Route::get('/business', [App\Http\Controllers\BusinessController::class, 'index']);
Route::get('/scholarship', [App\Http\Controllers\BusinessController::class, 'scholarship']);
