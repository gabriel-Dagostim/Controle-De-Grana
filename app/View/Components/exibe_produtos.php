<?php

namespace App\View\Components;

use Illuminate\View\Component;

class exibe_produtos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $produtos;

    public function __construct($produtos)
    {
        $this->produtos = $produtos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.exibe_produtos');
    }
}
