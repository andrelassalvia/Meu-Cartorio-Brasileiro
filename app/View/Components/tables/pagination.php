<?php

namespace App\View\Components\tables;

use Illuminate\View\Component;

class pagination extends Component
{
    public $array;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.pagination');
    }
}
