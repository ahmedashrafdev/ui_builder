<?php

namespace App\View\Components\Blocks\partners;

use Illuminate\View\Component;

class BlockOne extends Component
{
    public $partners;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($partners)
    {
        //
        $this->partners = $partners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('compnents.blocks.partners.block-one');
    }
}
