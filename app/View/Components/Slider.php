<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Slider extends Component
{
    public $slides;

    public function __construct()
    {
        $this->slides = Cache::remember("homepage_slides", config('cache.timeout'), function (){
            return \App\Models\Slide::withTranslations()->active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('components.slider');
    }
}
