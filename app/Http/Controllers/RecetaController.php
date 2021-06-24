<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\CategoriaReceta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RecetaController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['show','search']]);   // Exceptuamos al metodo show para que este visible sin registro o login
        
    }

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $recetas = Auth::user()->receta;
       
        $usuario = auth()->user()->id;
        $recetas = Receta::where('user_id',$usuario)->paginate(4);
        return view('recetas.index',compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categoria = DB::table('categoria_receta')->get()->pluck('nombre','id');
        $categoria = Categoria::all(['id','categoria']);
        return view('recetas.create',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        // Validation Laravel
        $data = request() -> validate([
            'nombreReceta' => 'required|min:6',
            'categoriaReceta' => 'required',
            'preparacion' => 'required',
            'ingredientes' => 'required',
            'imagenes'=>'required|image'
        ]);

        // Fit img and Upload to Digital Ocean
        $file = request() -> file('imagenes');
        // Obtain name of file 
        $imageName = $file -> getClientOriginalName();
        // Intervation Image
        $img = Image::make($file)->fit(1200,600);
        $resource = $img->stream()->detach();
        // Upload and get image
        $imgUploadServer = Storage::disk('spaces')->put('recetas/' . $imageName,$resource);
        $imgServer =Storage::disk(name:'spaces')->url('recetas/'.$imageName);


        auth()->user()->receta()->create([

            'nombreReceta' => $data['nombreReceta'],
            'ingredientes' => $data['ingredientes'],
            'preparacion'  => $data['preparacion'],
            'imagen' => $imgServer,
            'categoria_id' => $data['categoriaReceta'],
        
        ]);      
        return redirect()->action('RecetaController@index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        $like = (auth()->user())?auth()->user()->recetasLikes->contains($receta->id):false;  
        $likes = $receta->cantidadLikes->count();
        return view('recetas.show',compact('receta','like','likes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        $categoria = Categoria::all(['id','categoria']);
        return view('recetas.edit',compact('categoria','receta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        $this->authorize('update',$receta);

        // Validation Laravel
        $data = request() -> validate([
            'nombreReceta' => 'required|min:6',
            'categoriaReceta' => 'required',
            'preparacion' => 'required',
            'ingredientes' => 'required',
        ]);
        $receta -> nombreReceta = $data['nombreReceta'];
        $receta -> categoria_id = $data['categoriaReceta'];
        $receta -> preparacion = $data['preparacion'];
        $receta -> ingredientes = $data['ingredientes'];

        // condition to update img to db 
        if (request('imagenes')) {
            $rutaImg = $request['imagenes']->store('upload-recetas','public');
            $img = Image::make( public_path("storage/{$rutaImg}"))->fit(1200,550);
            $receta->imagen = $rutaImg;
            $img->save();
        }   
        $receta->save();     
        return redirect()->action('RecetaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {   
        $this->authorize('delete',$receta);
        $receta->delete();
        return redirect()->action('RecetaController@index');
    }


    public function search(Request $request)
    {
        $busquedaReceta = $request->get('buscar');
        $recetas = Receta::where('nombreReceta','like', '%' . $busquedaReceta . '%')->get();
        return view('search.show',compact('recetas','busquedaReceta'));
    }
}
