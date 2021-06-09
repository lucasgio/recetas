<?php

namespace App\Models;

use App\Models\Perfil;
use App\Models\Receta;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // Event when the user its succefully registed
    protected static function boot()
    {
        parent::boot();
        static ::created( function ($user) {

            $user->perfil()->create();

        });
    }    


    // Relation user 1:n recetas
    public function receta()
    {
       return $this->hasMany(Receta::class);
    }

    // Relation user - perfils 1:1
    public function perfil ()
    {
        return $this->hasOne(Perfil::class);
    }

    public function recetasLikes()
    {
        return $this->belongsToMany(Receta::class,'likes_receta');
    }


}

