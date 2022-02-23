<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Solution extends Component
{
    public $solutions;
    public  $meta;

    public function __construct()
    {
        $this->meta = meta('solution', ['body']);

        $this->solutions = Cache::remember("homepage_solutions", config('cache.timeout'), function (){
            return \App\Models\Solution::active()->orderBy('ordering')->get();
        });
    }
    public function render()
    {
        return view('components.solution');
    }
}
