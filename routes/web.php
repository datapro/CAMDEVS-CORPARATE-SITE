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
// Route::post('/join', [PageController::class, 'join']);
Route::post('/join', [PageController::class, 'joinsave']);
Route::post('/feed', [PageController::class, 'feedsave']);
Route::get('/feed', [PageController::class, 'feed']);
Route::get('/scholars', [PageController::class, 'scholars']);
Route::post('/scholars', [PageController::class, 'scholarssave']);
Route::get('/sme', [PageController::class, 'sme']);
Route::post('/sme', [PageController::class, 'smesave']);
Route::get('/training', [PageController::class, 'training']);
Route::post('/training', [PageController::class, 'trainingsave']);
Route::get('/farmers', [PageController::class, 'farmers']);
Route::post('/farmers', [PageController::class, 'farmerssave']);

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'send']);

// login route




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:admin');
Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'member'])->middleware('role:user');

// Admin route


Route::get('/users', [App\Http\Controllers\HomeController::class, 'users']);
Route::delete('/users/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
Route::delete('/member/{id}', [App\Http\Controllers\MemberController::class, 'destroy']);
Route::get('/skill', [App\Http\Controllers\MemberController::class, 'skill']);
Route::delete('/skill/{id}', [App\Http\Controllers\MemberController::class, 'destsk']);
Route::get('/feeding', [App\Http\Controllers\FeedingController::class, 'index']);
Route::delete('/feeding/{id}', [App\Http\Controllers\FeedingController::class, 'destroy']);
Route::get('/agro', [App\Http\Controllers\FeedingController::class, 'agro']);
Route::get('/business', [App\Http\Controllers\BusinessController::class, 'index']);
Route::delete('/business/{id}', [App\Http\Controllers\BusinessController::class, 'destroy']);
Route::delete('/scholarship/{id}', [App\Http\Controllers\BusinessController::class, 'dest']);
Route::get('/scholarship', [App\Http\Controllers\BusinessController::class, 'scholarship']);


// edit
// Show the form for editing a post
Route::get('/edit/{id}/member', [MemberController::class, 'edit'])->name('edit.member');
// Update the post
Route::put('/member/{id}', [MemberController::class, 'update'])->name('edit.member.update');

// Show the form for editing a post
Route::get('/edit/{id}/feed', [FeedingController::class, 'edit'])->name('edit.feed');
// Update the post
Route::put('/feed/{id}', [FeedingController::class, 'update'])->name('edit.feed.update');

// Show the form for editing a post
Route::get('/edit/{id}/smer', [BusinessController::class, 'edit'])->name('edit.smer');
// Update the post
Route::put('/smer/{id}', [BusinessController::class, 'updates'])->name('edit.smer.updates');

// Show the form for editing a post
Route::get('/edits/{id}/scholarship', [BusinessController::class, 'edits'])->name('edit.scholarship');
// Update the post
Route::put('/scholarship/{id}', [BusinessController::class, 'updatesh'])->name('edit.scholarship.updatesh');

// Show the form for editing a post
Route::get('/edits/{id}/agrof', [FeedingController::class, 'edits'])->name('edit.agrof');
// Update the post
Route::put('/agrof/{id}', [FeedingController::class, 'updatef'])->name('edit.agrof.updatef');

// Show the form for editing a post
Route::get('/edit/{id}/skill', [MemberController::class, 'show'])->name('edit.skill');
// Update the post
Route::put('/skill/{id}', [MemberController::class, 'updateskill'])->name('edit.skill.updateskill');
