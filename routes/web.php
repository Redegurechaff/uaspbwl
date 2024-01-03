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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user_create');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user_store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user_edit');
Route::put('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user_update');
Route::delete('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user_delete');

Route::get('/golongan', [App\Http\Controllers\GolController::class, 'index'])->name('golongan');
Route::get('/create', [App\Http\Controllers\GolController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\GolController::class, 'store'])->name('store');
Route::get('//golonganedit/{id}', [App\Http\Controllers\GolController::class, 'edit'])->name('golongan.edit');
Route::put('/update/{id}', [App\Http\Controllers\GolController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [App\Http\Controllers\GolController::class, 'destroy'])->name('delete');

Route::get('/pelanggan', [App\Http\Controllers\PelController::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/create', [App\Http\Controllers\PelController::class, 'create'])->name('pel_create');
Route::post('/pelanggan/store', [App\Http\Controllers\PelController::class, 'store'])->name('pel_store');
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelController::class, 'edit'])->name('pel_edit');
Route::put('/pelanggan/update/{id}', [App\Http\Controllers\PelController::class, 'update'])->name('pel_update');
Route::delete('/pelanggan/delete/{id}', [App\Http\Controllers\PelController::class, 'destroy'])->name('pel_delete');