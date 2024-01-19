<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'base'])->name('main.base');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');

Route::get('/cours', [MainController::class, 'cours'])->name('main.cours');

Route::get('/mentionslegales', [MainController::class, 'mentionlegales'])->name('main.mentionslegales');


