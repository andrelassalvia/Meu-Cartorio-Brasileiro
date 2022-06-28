<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class check extends Component
{
    public $colName;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($colName, $title)
    {
        $this->colName = $colName;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.check');
    }
}
