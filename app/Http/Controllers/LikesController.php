<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
     {
        $this->middleware('auth');
     }


    public function update(Request $request, Receta $receta)
    {
        return auth()->user()->recetasLikes()->toggle($receta);
    }

   
}
