<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function about()
    {
        return view('info.about');
    }

    public function question()
    {
        return view('info.q&a');
    }

    public function contact()
    {
        return 'Desde Contacto';
    }
}
