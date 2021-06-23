<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public $categoria;
    public $categorias;

    public function __construct($categoria,$categorias)
    {
        $this-> categorias = $categorias;
        $this-> categoria = $categoria;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
