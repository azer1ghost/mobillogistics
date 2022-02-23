<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Service extends Model
{
    use Translatable, HasFactory, SoftDeletes;

    protected $translatable = [
            'title',
            'detail',
            'meta_title',
            'meta_description',
            'meta_keywords',
            'btn_text',
            'heading',
        ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeInMenu($query)
    {
        return $query->where('in_menu', true);
    }

    public function subServices(): HasMany
    {
        return $this->hasMany( __CLASS__ );
    }

    public function parentService(): BelongsTo
    {
        return $this->belongsTo( __CLASS__ , 'service_id');
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('homepage_services');
            Cache::forget('menu_services');
            Cache::forget('footer_services');
        });
    }
}
