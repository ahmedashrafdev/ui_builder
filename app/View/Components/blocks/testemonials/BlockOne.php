<?php

namespace App\View\Components\Blocks\testemonials;

use Illuminate\View\Component;

class BlockOne extends Component
{
    public $testemonials;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($testemonials)
    {
        //
        $this->testemonials = $testemonials;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.testemonials.block-one');
    }
}
