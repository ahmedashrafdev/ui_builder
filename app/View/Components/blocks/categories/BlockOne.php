<?php

namespace App\View\Components\Blocks\categories;

use App\Block;
use Illuminate\View\Component;

class BlockOne extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cateogires)
    {
        //
        $this->categories = $cateogires;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.categories.block-one' ,['partials' => $this->partials]);
    }

    public function partials()
    {
        
        return ['anuy'];
    }
}
