<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    public static function bootSluggable()
    {
        static::creating(function ($model) {
            $slugField = $model->slugField ?? 'slug';
            $sluggableField = $model->sluggableField ?? 'name';

            if ($model->{$slugField}) {
                return null;
            }

            $model->{$slugField} = Str::slug($model->{$sluggableField});
        });
    }
}
