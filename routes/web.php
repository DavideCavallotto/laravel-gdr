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

// GET

Route::get('/', [CharactersController::class, 'index'])->name('index');

Route::get('/characters/create',[CharactersController::class, 'create'])
->name('characters.create');

Route::get('/characters/{character}', [CharactersController::class, 'show'])
    ->name('characters.show');

// POST

Route::post('/characters', [CharactersController::class, 'store'])
    ->name('characters.store');

Route::get('/characters/{character}/edit', [CharactersController::class, 'edit'])
    ->name('characters.edit');

Route::put('/characters/{character}', [CharactersController::class,'update'])
    ->name('characters.update');

Route::delete('characters/{character}', [CharactersController::class,'destroy'])
->name('characters.destroy');
