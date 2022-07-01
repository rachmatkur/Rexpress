<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MenuController;
use App\Models\User;
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

Route::get('/', [ApplicationController::class, 'login']);
Route::get('/login', [ApplicationController::class, 'login']);
Route::get('/register', [ApplicationController::class, 'register']);

Route::get('/home', [ApplicationController::class, 'home']);
Route::get('/restos', [ApplicationController::class, 'restos']);

//crud resto
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/add', [AdminController::class, 'create'])->name('admin.add');
Route::post('/admin/add', [AdminController::class, 'store']);
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/{user}/edit', [AdminController::class, 'update']);
Route::delete('/admin/{user}', [AdminController::class, 'destroy'])->name('admin.delete');
