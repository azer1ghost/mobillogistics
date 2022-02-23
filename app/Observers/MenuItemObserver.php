<?php

namespace App\Observers;

use Cache;
use TCG\Voyager\Models\MenuItem;

class MenuItemObserver
{
    public function updated(MenuItem $menuItem)
    {
        Cache::forget('menu_items');
        Cache::forget('footer_menus');
    }
}
