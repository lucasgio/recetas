<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfil extends Model
{

    public function users()
    {
        // Relotion 1:1 perfil-user
        return $this->belongsTo(User::class,'user_id');
    }





}
