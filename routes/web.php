<?php

use App\Http\Controllers\ComicController as ComicController;
use App\Models\Comic;
use Illuminate\Support\Facades\Route;


Route::get('/', [ComicController::class, 'index'])->name('comics');

/*---------- BONUS 1 ----------*/
/* Route::get('/info-comic/{id}', [ComicController::class, 'show'])->name('info-comic'); */

/*---------- BONUS 2 ----------*/

Route::get('/info-comic/{slug}', [ComicController::class, 'show'])->name('info-comic');
