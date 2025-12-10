<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
class peliculaController extends Controller
{
    public function index()
    {
        
        $listaPeliculas = Pelicula::all();
        return view('pelicula.index',[
            'listaPeliculas' => $listaPeliculas
        ]);
    }
}
