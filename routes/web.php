<?php

use App\Http\Controllers\ActionsController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ViewsController::class, 'index'])
->name('index');

Route::get('/film-info/{film_id}', [ViewsController::class, 'film_info'])
    ->name('film-info');
