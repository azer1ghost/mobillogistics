<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Counter extends Component
{
    public $counters;

    public function __construct()
    {
        $this->counters = Cache::remember("homepage_counters", config('cache.timeout'), function (){
            return \App\Models\Counter::active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('components.counter');
    }
}
