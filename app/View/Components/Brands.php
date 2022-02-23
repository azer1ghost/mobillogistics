<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Brands extends Component
{
    public $brands;

    public function __construct()
    {
        $this->brands = Cache::remember("homepage_brands", config('cache.timeout'), function (){
            return \App\Models\Brand::active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('components.brands');
    }
}
