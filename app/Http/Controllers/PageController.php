<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
// prendo i movies dal db
        $movies = Movie::all();
        
        // dd($movies);
        
// li aggiungo alla view
        $data = [
            'movies' => $movies
        ];

// chiamo la view e passo i dati
        return view('home',$data);
    }
}
