<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class Footer extends Component
{
    public $page ;
    public $path ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page , $path)
    {
        //
        $this->page = $page;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.layouts.breadcrumbs');
    }
}
