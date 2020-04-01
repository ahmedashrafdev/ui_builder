<?php

namespace App\View\Components\blocks\headers;

use Illuminate\View\Component;

class BlockOne extends Component
{
    public $menu;
    public $cart;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($menue , $cart)
    {
        //
        $this->menue = $menue;
        $this->cart = $cart;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.headers.block-one');
    }
}
