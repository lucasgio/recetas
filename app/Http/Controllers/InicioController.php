<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Receta;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{
  public function index()
  {    
    // Mostrar las recetas mas votadas
    $votadas = Receta::withCount('cantidadLikes')->orderBy('cantidad_likes_count','DESC')->take(3)->get();
  
    // Obtener las recetas mas nuevas
    $nuevas = Receta::latest()->take(5)->get();

    // Usuarios mas top
    $users =User::all();
    $userTop = [];
    foreach ($users as $user) {
     $userTop[$user->name][] = Receta::where('user_id',$user->id)
                        ->withCount('cantidadLikes')
                        ->get();
    }
    // Recetas por categoria
    // $categorias =  Categoria::all();
    // $recetas = [];
    // foreach ($categorias as $categoria) {
    //   $recetas[Str::slug($categoria->categoria)][] = Receta::where('categoria_id',$categoria->id)->take(3)->get();
    // }
    // return $recetas;
    
    return view('inicio.index',compact('nuevas','votadas','userTop'));

  }
}