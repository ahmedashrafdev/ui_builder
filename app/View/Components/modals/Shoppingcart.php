<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;

class Shoppingcart extends Component
{
    public $cart;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cart)
    {
        //

        $this->cart = $cart;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.shoppingcart');
    }
}
