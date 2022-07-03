<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
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

Route::get('/', [ApplicationController::class, 'home']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [ApplicationController::class, 'register'])->name('register');
Route::post('/register', [ApplicationController::class, 'store']);

Route::get('/cart', [ApplicationController::class, 'cart']);
Route::get('/history', [ApplicationController::class, 'history']);



Route::get('/home', [ApplicationController::class, 'home']);
Route::get('/restos', [ApplicationController::class, 'restos']);
Route::get('/restoDetail/{id}', [ApplicationController::class, 'restoDetail']);

//crud resto
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/add', [AdminController::class, 'create'])->name('admin.add');
Route::post('/admin/add', [AdminController::class, 'store']);
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/{user}/edit', [AdminController::class, 'update']);
Route::delete('/admin/{user}', [AdminController::class, 'destroy'])->name('admin.delete');


// crud menu
Route::get('/resto/dashboard', [MenuController::class, 'index'])->name('resto.index');

Route::get('/resto/add', [MenuController::class, 'create'])->name('resto.add');
Route::post('/resto/add', [MenuController::class, 'store']);
Route::get('/resto/{user}/edit', [MenuController::class, 'edit'])->name('resto.edit');
Route::post('/resto/{user}/edit', [MenuController::class, 'update']);
Route::delete('/resto/{user}', [MenuController::class, 'destroy'])->name('resto.delete');

Route::get('/category/add', [CategoryController::class, 'create'])->name('category.add');
Route::post('/category/add', [CategoryController::class, 'store']);
Route::get('/category/{user}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/{user}/edit', [CategoryController::class, 'update']);
Route::delete('/category/{user}', [CategoryController::class, 'destroy'])->name('category.delete');
