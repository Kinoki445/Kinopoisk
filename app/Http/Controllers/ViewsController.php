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
}
