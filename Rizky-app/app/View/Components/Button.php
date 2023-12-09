<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $label;
    public $theme;
    public $icon;

    public function __construct($label, $theme, $icon=null)
    {
        $this->label = $label;
        $this->theme = $theme;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
