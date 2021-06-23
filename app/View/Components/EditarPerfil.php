<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditarPerfil extends Component
{
    
    public $perfil;

    public function __construct($perfil)
    {
        $this -> perfil = $perfil;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editar-perfil');
    }
}
