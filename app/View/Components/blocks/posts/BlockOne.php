<?php

namespace App\View\Components\Blocks\posts;

use Illuminate\View\Component;

class BlockOne extends Component
{
    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($posts)
    {
        //
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blocks.posts.block-one');
    }
}
