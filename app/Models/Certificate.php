<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static active()
 */
class Certificate extends Model
{
    use SoftDeletes;

    protected $table = 'certificates';

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('homepage_certificates');
        });
    }
}
