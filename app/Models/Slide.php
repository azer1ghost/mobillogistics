<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Slide extends Model
{
    use Translatable, SoftDeletes;

    protected $translatable = ['title'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('homepage_slides');
        });
    }
}
