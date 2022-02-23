<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Footer extends Component
{
    public $socials;

    public $services;

    public $menuItems;

    public function __construct()
    {
        $this->socials = Cache::remember("footer_socials", config('cache.timeout'), function (){
            return \App\Models\Social::active()->orderBy('ordering')->get();
        });

        $this->services = Cache::remember("footer_services", config('cache.timeout'), function (){
            return \App\Models\Service::withTranslations()->active()->inMenu()->orderBy('ordering')->get();
        });

        $this->menuItems = Cache::remember("footer_menus", config('cache.timeout'), function (){
            return menu('website', '_json')->load('translations');
        });
    }

    public function render()
    {
        return view('components.footer');
    }
}
