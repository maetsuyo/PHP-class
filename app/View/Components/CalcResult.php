<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CalcResult extends Component
{
    public $total = 0;
    /**
     * Create a new component instance.
     */
    public function __construct($total)
    {
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.calc-result');
    }
}
