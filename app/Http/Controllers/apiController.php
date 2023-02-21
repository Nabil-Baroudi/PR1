<?php
//                                                           code by Eng.Nabil Baroudi
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class apiController extends Controller
{
    //a function that shows a list of latest popular movies
    public function index()
    {

        $response = Http::get("https://imdb-api.com/en/API/MostPopularMovies/k_h4pd24w5");

        $data = json_decode($response, true);

        return view('search', compact('data'));
    }

    //function to search for a movie or tv show
    public function api(Request $request)
    {
        $expression = $request->input('expression');

        $response = Http::get("https://imdb-api.com/en/API/SearchTitle/k_h4pd24w5/$expression");

        $data = json_decode($response, true);

        return view('view', compact('data'));
    }

    //a function to play the trailer of a selected movie or tv show.
    public function trailer($id)
    {
        $response = Http::get("https://imdb-api.com/en/API/YouTubeTrailer/k_h4pd24w5/$id");

        $data = json_decode($response, true);

        return view('viewTrailer', compact('data'));
    }
}
