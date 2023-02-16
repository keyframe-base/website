<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderButton extends Component
{
    public string $title, $tooltip, $link;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $tooltip, string $link)
    {
        $this->title = $title;
        $this->tooltip = $tooltip;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-button');
    }
}
