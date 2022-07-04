<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class aLinkParam extends Component
{
    public $route;
    public $color;
    public $title;
    public $param;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $color, $title, $param)
    {
        $this->route = $route;
        $this->color = $color;
        $this->title = $title;
        $this->param = $param;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.a-link-param');
    }
}
