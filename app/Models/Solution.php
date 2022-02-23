<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cache;
use TCG\Voyager\Traits\Translatable;

class Solution extends Model
{
    use HasFactory, Translatable;
    protected array $translatable = ['title'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('homepage_solutions');
        });
    }
}
