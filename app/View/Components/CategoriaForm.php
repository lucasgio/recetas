<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoriaForm extends Component
{
    public $receta;

    public function __construct($receta)
    {
        $this-> receta = $receta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categoria-form');
    }
}
