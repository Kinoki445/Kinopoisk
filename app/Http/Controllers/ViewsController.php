<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('index', [
            'kino' => ActionsController::index(),
        ]);
    }

    public function film_info(int $film_id)
    {
        return view('film-info', [
            'kino' => ActionsController::film_info($film_id),
            'recomend' => ActionsController::film_recomend($film_id),
        ]);
    }
}
