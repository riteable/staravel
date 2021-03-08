<?php

namespace App\Support;

class Arr
{
    /**
     * Search a multidimensional array by key and value.
     *
     * @param  array<mixed>  $array
     * @param  mixed  $key
     * @param  mixed  $value
     * @param  bool  $returnFirst
     * @return array<mixed>|null
     */
    public static function deepSearch($array, $key, $value, $returnFirst = false)
    {
        $results = [];

        if (is_array($array)) {
            if (array_key_exists($key, $array) && $array[$key] == $value) {
                if ($returnFirst) {
                    return $array;
                }
                $results[] = $array;
            }

            foreach ($array as $subarray) {
                $results = array_merge(
                    $results,
                    static::deepSearch($subarray, $key, $value, $returnFirst) ?? []
                );
            }
        }

        if ($returnFirst && empty($results)) {
            return null;
        }

        return $results;
    }
}
