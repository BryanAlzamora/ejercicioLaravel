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
    
    public function show($id)
    {
        $pelicula= Pelicula::find($id);
        return view('pelicula.detalles',[
            'pelicula'=>$pelicula
        ]);
    }
    public function delete($id){
        $pelicula=Pelicula::find($id);
        $pelicula->delete();
        return redirect(route('index'));
    }

    public function createForm(){
        $pelicula=new Pelicula();
        return view('pelicula.form',[
            'pelicula'=>$pelicula
        ]);
    }
    public function create(Request $request){
        $datos=$request->validate([
            'titulo' => 'required|string|max:225',
            'director' =>'required|string|max:225',
            'genero' => 'required|string|max:225',
            'sinopsis' =>'required|string|max:225',
            'fecha_estreno' => 'required|date',
            'duracion_min' =>'required|integer|min:10|max:300',
            'clasificacion' => 'required|string|max:225'
        ]);

        Pelicula::create($datos);
        return redirect()->route('index');
    }

    public function modifyForm($id){
        $pelicula=Pelicula::find($id);
        return view('pelicula.form',[
           'pelicula'=>$pelicula     
        ]);
    }

    public function modify($id,Request $request){
        $pelicula=Pelicula::find($id);

        $pelicula->titulo = $request->titulo;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->fecha_estreno = $request->fecha_estreno;
        $pelicula->duracion_min = $request->duracion_min;
        $pelicula->clasificacion = $request->clasificacion;

        $pelicula->save();
        return redirect(route('index'));
    }
}
 