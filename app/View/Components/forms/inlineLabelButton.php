<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class inlineLabelButton extends Component
{
    public $colName;
    public $labelSize;
    public $title;
    public $req;
    public $colSize;
    public $route;
    public $tooltip;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $colName,
        $labelSize,
        $title,
        $req,
        $colSize,
        $route,
        $tooltip
    )
    {
        $this->colName = $colName;
        $this->labelSize = $labelSize;
        $this->title = $title;
        $this->req = $req;
        $this->colSize = $colSize;
        $this->route = $route;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.inline-label-button');
    }
}
