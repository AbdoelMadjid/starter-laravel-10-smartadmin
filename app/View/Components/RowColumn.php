<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RowColumn extends Component
{
    /**
     * Create a new component instance.
     */
    public $column;

    public function __construct($column)
    {
        $this->column = $column;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.row-column');
    }
}
