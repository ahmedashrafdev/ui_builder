<?php

namespace App\View\Components\Blocks\sliders;

use Illuminate\View\Component;

class BlockOne extends Component
{
    public $sliders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sliders)
    {
        //
        $this->sliders = $sliders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.sliders.block-one');
    }
}
