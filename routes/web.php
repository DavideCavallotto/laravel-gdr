<?php

use App\Http\Controllers\CharactersController;
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
use App\Http\Controllers\Guest\PageController;

Route::get('/', [CharactersController::class, 'index'])->name('index');

Route::get('/characters/create',[CharactersController::class, 'create'])
->name('characters.create');
