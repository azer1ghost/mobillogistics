<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Certificate extends Component
{
    public $certificates;

    public function __construct()
    {
        $this->certificates = Cache::remember("homepage_certificates", config('cache.timeout'), function (){
            return \App\Models\Certification::active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('components.certificate');
    }
}

