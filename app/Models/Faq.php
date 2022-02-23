<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Faq extends Model
{
    use Translatable;
    protected $translatable = ['question', 'answer'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
