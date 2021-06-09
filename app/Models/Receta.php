<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receta extends Model
{

    protected $fillable = [
        'nombreReceta',
        'ingredientes',
        'preparacion',
        'imagen',
        'categoria_id',
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function cantidadLikes()
    {
        return $this->belongsToMany(User::class,'likes_receta');
    }
}
