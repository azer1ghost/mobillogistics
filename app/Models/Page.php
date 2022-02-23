<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static slug(string $string)
 * @method static active()
 * @method static key(string $string)
 * @method static select(array $array)
 */
class Page extends Model
{
    use Translatable, SoftDeletes;

    protected array $translatable = ['title', 'body', 'heading', 'meta_description', 'meta_keywords', 'excerpt'];

    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';
    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }

    public function scopeSlug($query, $slug)
    {
        return $query->active()->where('slug', $slug);
    }

    public function scopeKey($query, $key)
    {
        return $query->active()->where('key', $key);
    }

    public function hideFields(): array
    {
        return array(
                'homepage'   => ['key', 'meta_keywords'],
                'about'      => ['key', 'heading', 'excerpt', 'meta_keywords'],
                'who-we-are' => ['key', 'heading', 'excerpt'],
                'solution' => ['heading', 'meta_description','slug', 'meta_keywords', 'excerpt', 'image'],
                '' => ['excerpt', 'heading',],
            )
            [$this->key] ?? [];
    }

    public function setKeyAttribute($value) {
        if ( empty($value) ) {
            $this->attributes['key'] = NULL;
        } else {
            $this->attributes['key'] = $value;
        }
    }
}
