<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class selectForeach extends Component
{
    public $title;
    public $colName;
    public $array;
    public $id;
    public $colSize;
    public $labelSize;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $colName, $array, $id, $colSize, $labelSize)
    {
        $this->title = $title;
        $this->colName = $colName;
        $this->array = $array;
        $this->id = $id;
        $this->colSize = $colSize;
        $this->labelSize = $labelSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select-foreach');
    }
}
