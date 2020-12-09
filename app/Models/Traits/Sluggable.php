<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    public static function bootSluggable()
    {
        static::saving(function ($model) {
            $slugField = $model->slugField ?? 'slug';
            $sluggableField = $model->sluggableField ?? 'name';

            if ($model->isDirty($slugField)) {
                return null;
            }

            if (!$model->{$sluggableField}) {
                return null;
            }

            $model->{$slugField} = Str::slug($model->{$sluggableField});
        });
    }
}
