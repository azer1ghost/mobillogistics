<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Branch extends Model
{
    use Translatable;
    protected $translatable = ['title', 'body'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
