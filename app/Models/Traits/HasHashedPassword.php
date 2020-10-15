<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Hash;

trait HasHashedPassword
{
    protected static function bootHasHashedPassword()
    {
        static::saving(function ($model) {
            if (!$model->password) {
                return null;
            }

            if ($model->isClean('password')) {
                return null;
            }

            $model->password = Hash::make($model->password);
        });
    }
}
