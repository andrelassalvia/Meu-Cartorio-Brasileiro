<?php

namespace App\View\Components\tables;

use Illuminate\View\Component;

class paginationAppend extends Component
{
    public $array;
    public $dataform;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($array, $dataform)
    {
        $this->array = $array;
        $this->dataform = $dataform;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.pagination-append');
    }
}
