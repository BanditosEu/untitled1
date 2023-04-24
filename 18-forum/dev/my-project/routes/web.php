<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home.index');

Route::get('/thread/{id}', [\App\Http\Controllers\ThreadController::class, 'index'])->name('thread.index');

Route::get('/topic/{topic}', [\App\Http\Controllers\TopicController::class, 'index'])->name('topic.index');

//Route::post('/topic/{id}', [\App\Http\Controllers\ReplyController::class, 'store'])->name('reply.store');

Route::middleware('auth')->group(function () {
    Route::post('/topic/{id}', [\App\Http\Controllers\ReplyController::class, 'store'])->name('reply.store');
    Route::post('/thread/{id}', [\App\Http\Controllers\TopicController::class, 'store'])->name('Topic.store');
    Route::post('/', [\App\Http\Controllers\ThreadController::class, 'store'])->name('Thread.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/rules', function(){return View('layouts.rules');})->name('rules');

require __DIR__.'/auth.php';
