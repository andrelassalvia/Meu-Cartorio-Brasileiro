<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class telefone extends Component
{
    public $req;
    public $colSize;
    public $colName;
    public $countries;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($req, $colSize, $colName, $countries)
    {
        $this->req = $req;
        $this->colSize = $colSize;
        $this->colName = $colName;
        $this->countries = $countries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.telefone');
    }
}
