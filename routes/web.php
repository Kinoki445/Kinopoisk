<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewsController::class, 'index'])
    ->name('site.index');

