<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UltimasRecetas extends Component
{
    public $nueva;
    public $receta;

    public function __construct($nueva,$receta)
    {
        $this-> receta = $receta;
        $this-> nueva  = $nueva;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ultimas-recetas');
    }
}
