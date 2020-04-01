<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class Contact extends Component
{
    public $inputs;
    public $action;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputs , $action , $method)
    {
        //
        $this->inputs = $inputs;
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.contact');
    }
}
