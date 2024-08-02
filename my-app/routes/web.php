<?php

use App\Http\Controllers\mdg\MainController;
use App\Http\Controllers\mdg\UserPatientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\unis\UnisController;

// Route::view('/', 'welcome');
// Route::get()
// Route::post()
// Route::put()
// Route::delete()
// Route::option()
// Route::match(['get', 'post'])
// Route::any()

Route::view('/','welcome');

Route::get('weUnis/', [UnisController::class, 'weUnis'])->name('weUnis.all');
Route::get('weUnis/{id}/', [UnisController::class, 'weUnisMember'])->name('weUnis.member');
Route::put('weUnis/{id}', [UnisController::class, 'weUnisUpdate'])->name('weUnis.update');
Route::get('addUnis/', [UnisController::class, 'addMemberForm'])->name('add.form');
Route::post('addUnis/', [UnisController::class, 'addMemberSubmit'])->name('add.submit');

Route::get('mdg/', [MainController::class, 'index'])->name('index');
Route::get('mdgSignup/', [UserPatientController::class, 'signupForm'])->name('signup.form');
Route::post('mdgSignup/', [UserPatientController::class, 'signupSubmit'])->name('signup.submit');
Route::get('mdgLogin/', [UserPatientController::class, 'loginForm'])->name('login.form');
Route::post('mdgLogin/', [UserPatientController::class, 'loginSubmit'])->name('login.submit');
