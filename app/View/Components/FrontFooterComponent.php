<?php

namespace App\View\Components;

use App\Models\Brand;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontFooterComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $brands = Brand::all();
        return view('components.front-footer-component', compact('brands'));
    }
}