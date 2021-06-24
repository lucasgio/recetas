<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Receta;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        $receta = Receta::where('user_id',$perfil->user_id)->paginate(3);

        return view('perfil.show',compact('perfil','receta'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        $this->authorize('view',$perfil);
        return view('perfil.edit',compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        // Ejecutamos Policy
        $this->authorize('update',$perfil);


        // Validation Laravel
        $data = request() -> validate([
            'usuario' => 'required',
            'nombre' => 'required'
        ]);

        // guardar en table user
        auth()->user()->name = $data['nombre'];
        auth()->user()->save();

        // guardar en table perfil    
        $perfil -> username = $data['usuario'];
        $perfil -> platos_preferidos = $request['platos_preferidos'];
        $perfil -> bio = $request['biografia'];
        if (request('imagen_perfil')) {
            $storagePath = $request->file(key:'imagen_perfil')->store('recetas','spaces');
            // $img = Image::make($rutaImg)->fit(200,200);
            // $perfil->imagen_perfil = $rutaImg;
            // $img->save();
            return $storagePath;

        }  

        $perfil->save();
        return redirect()->action('RecetaController@index');    
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
