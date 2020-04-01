<?php

namespace App\View\Components\tabs;

use Illuminate\View\Component;

class Tab extends Component
{
    public $tab;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tab)
    {
        //

        $this->tab = $tab;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tab');
    }
}
