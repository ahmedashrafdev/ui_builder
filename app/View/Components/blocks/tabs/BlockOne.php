<?php

namespace App\View\Components\Blocks\tabs;

use Illuminate\View\Component;

class BlockOne extends Component
{
    public $products;
    public $tabs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tabs , $products)
    {
        //
        $this->tabs = $tabs;
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.tabs.block-one');
    }
}
