<?php

namespace App\View\Components\banners;

use Illuminate\View\Component;

class InfoBanner extends Component
{
    public $banner;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($banner)
    {
        //
        $this->banner = $banner;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.info-banner');
    }
}
