<?php

namespace App\View\Components\header;

use Illuminate\View\Component;

class NavOne extends Component
{
    public $menue;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($menue)
    {
        //
        $this->menue = $menue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav-one');
    }
}
