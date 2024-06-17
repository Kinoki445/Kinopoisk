<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ActionsController extends Controller
{

    public static function index()
    {
        $import = new ApiController();
        $response = $import->client->request('GET', 'trending/movie/day?language=ru-Rus');

        $data = json_decode($response->getBody()->getContents(),true);

        return $data;
    }

    public static function film_info(int $film_id)
    {
        $import = new ApiController();
        $response = $import->client->request('GET', "movie/{$film_id}?language=ru-Rus");

        $data = json_decode($response->getBody()->getContents(),true);

        return $data;
    }

    public static function film_recomend(int $film_id)
    {
        $import = new ApiController();
        try{
            $response = $import->client->request('GET', "movie/{$film_id}/recommendations?language=ru-RU&page=1");
            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (\Exception $e) {
            return null;
        }
    }


}
