<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class inlineLabel extends Component
{
    public $colName;
    public $title;
    public $colSize;
    public $type;
    public $req;
    public $labelSize;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($colName, $title, $colSize, $type, $req, $labelSize)
    {
        $this->colName = $colName;
        $this->title = $title;
        $this->colSize = $colSize;
        $this->type = $type;
        $this->req = $req;
        $this->labelSize = $labelSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.inline-label');
    }
}
