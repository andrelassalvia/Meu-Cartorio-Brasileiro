<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class button extends Component
{
    public $color;
    public $type;
    public $title;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $type, $title, $id)
    {
        $this-> color = $color;
        $this-> type = $type;
        $this-> title = $title;
        $this-> id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.button');
    }
}
