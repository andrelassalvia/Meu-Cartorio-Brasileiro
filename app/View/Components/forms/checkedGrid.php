<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class checkedGrid extends Component
{
    public $title;
    public $colName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $colName)
    {
        $this->title = $title;
        $this->colName = $colName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.checked-grid');
    }
}
