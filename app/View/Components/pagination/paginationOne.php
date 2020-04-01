<?php

namespace App\View\Components\pagination;

use Illuminate\View\Component;

class paginationOne extends Component
{
    public $pagination;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pagination)
    {
        //

        $this->pagination = $pagination;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pagination-one');
    }
}
