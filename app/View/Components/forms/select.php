<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class select extends Component
{
    public $title;
    public $colName;
    public $id;
    public $labelSize;
    public $colSize;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $colName, $id, $labelSize, $colSize)
    {
        $this->title = $title;
        $this->colName = $colName;
        $this->id = $id;
        $this->labelSize = $labelSize;
        $this->colSize = $colSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
