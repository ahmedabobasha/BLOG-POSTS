<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts',[PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::get('/posts/create',[PostController::class ,'create'])->name('posts.create');
Route::post('/posts',[PostController::class ,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit',[PostController::class ,'edit'])->name('posts.edit');
Route::post('/posts/{id}',[PostController::class, 'update'])->name('posts.update');
Route::get('/posts/destroy/{id}',[PostController::class, 'destory'])->name('posts.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


