<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Services extends Component
{
    public $services;

    public function __construct()
    {
        $this->services = Cache::remember("homepage_services", config('cache.timeout'), function (){
            return \App\Models\Service::withTranslations()->active()->featured()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('components.services');
    }
}
