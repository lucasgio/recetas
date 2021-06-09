<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'categoria'=>'Entrantes',
            'created_at'=> date('Y-d-m H:i:s'),
            'updated_at'=> date('Y-d-m H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'categoria'=>'Platos Fuerte',
            'created_at'=> date('Y-d-m H:i:s'),
            'updated_at'=> date('Y-d-m H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'categoria'=>'Dulces',
            'created_at'=> date('Y-d-m H:i:s'),
            'updated_at'=> date('Y-d-m H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'categoria'=>'Cremas y Lacteos',
            'created_at'=> date('Y-d-m H:i:s'),
            'updated_at'=> date('Y-d-m H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'categoria'=>'Jugos y Bebidas',
            'created_at'=> date('Y-d-m H:i:s'),
            'updated_at'=> date('Y-d-m H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'categoria'=>'Pastas Caseras',
            'created_at'=> date('Y-d-m H:i:s'),
            'updated_at'=> date('Y-d-m H:i:s'),
        ]);
    }
}
