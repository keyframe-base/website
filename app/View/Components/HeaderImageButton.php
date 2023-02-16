<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderImageButton extends Component
{
    public string $link, $imageName, $alt, $tooltip;
    /**
     * Create a new component instance.
     */
    public function __construct($link, $imageName, $alt, $tooltip)
    {
        $this->link = $link;
        $this->imageName = $imageName;
        $this->alt = $alt;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-image-button');
    }
}
