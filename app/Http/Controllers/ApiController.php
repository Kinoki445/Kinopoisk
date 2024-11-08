<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public $client;
    public function __construct(){
        $this ->client = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/',
            'headers' => [
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2NzE4YmIwOWZhY2VhZDIwYjE0YTRlY2IwYjRmNDk4OCIsInN1YiI6IjY2NzAwZjQwYzI5ODgwODk5MGNiOWY3MiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.rW34m9G-t_icul6idsqxLebF-9mswhw9Nl9pHC0g1Bo',
            'accept' => 'application/json',
        ]]);
    }
}
