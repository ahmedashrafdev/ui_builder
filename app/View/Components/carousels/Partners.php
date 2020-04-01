<?php

namespace App\View\Components\carousels;

use Illuminate\View\Component;

class Partners extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($partners)
    {
        //
        $this->$partners = $partners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.partners');
    }
}
