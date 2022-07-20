<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Auth\Events\Login;
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

//login, register, and logout route
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('loginIndex');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/register', [ApplicationController::class, 'register'])->name('registerIndex');
Route::post('/register', [ApplicationController::class, 'store'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('profile', [ApplicationController::class, 'profile'])->name('profile')->middleware('auth')->middleware('auth');


//features
Route::get('/cart', [ApplicationController::class, 'cart'])->middleware('auth');
Route::get('/history', [ApplicationController::class, 'history'])->middleware('auth');
Route::get('/home', [ApplicationController::class, 'home'])->name('home');
Route::get('/restos', [ApplicationController::class, 'restos']);
Route::get('/restoDetail/{id}', [ApplicationController::class, 'restoDetail']);

//crud resto
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index')->middleware('auth', 'admin');
Route::get('/admin/add', [AdminController::class, 'create'])->name('admin.add')->middleware('auth', 'admin');
Route::post('/admin/add', [AdminController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit')->middleware('auth', 'admin');
Route::post('/admin/{user}/edit', [AdminController::class, 'update'])->middleware('auth', 'admin');
Route::delete('/admin/{user}', [AdminController::class, 'destroy'])->name('admin.delete')->middleware('auth', 'admin');

// crud menu
Route::get('/resto/dashboard', [MenuController::class, 'index'])->name('resto.index')->middleware('auth','resto');
Route::get('/resto/add', [MenuController::class, 'create'])->name('resto.add')->middleware('auth','resto');
Route::post('/resto/add', [MenuController::class, 'store'])->middleware('auth','resto');
Route::get('/resto/{user}/edit', [MenuController::class, 'edit'])->name('resto.edit')->middleware('auth','resto');
Route::post('/resto/{user}/edit', [MenuController::class, 'update']);
Route::delete('/resto/{user}', [MenuController::class, 'destroy'])->name('resto.delete')->middleware('auth','resto');

Route::get('/category/add', [CategoryController::class, 'create'])->name('category.add')->middleware('auth','resto');
Route::post('/category/add', [CategoryController::class, 'store'])->middleware('auth','resto');
Route::get('/category/{user}/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth','resto');
Route::post('/category/{user}/edit', [CategoryController::class, 'update'])->middleware('auth','resto');
Route::delete('/category/{user}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth','resto');
