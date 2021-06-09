<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function show(Categoria $categoria)
    {
        $recetas = Receta::where('categoria_id',$categoria->id)->paginate(2);
        return view('categoria.show',compact('recetas','categoria'));
    }
}
