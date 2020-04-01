<?php

namespace App\View\Components\blocks\banners;

use Illuminate\View\Component;

class BlockOne extends Component
{

    public $banners;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($banners)
    {
        //
        $this->banners = $banners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.banenrs.block-one');
    }
}
