<?php

use App\Support\ManifestParser;
use Illuminate\Support\Arr;

if (! function_exists('manifest_asset')) {
    /**
     * Get the path to a versioned manifest file.
     *
     * @param  string  $key
     * @param  string  $manifestPath
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function manifest_get($key, $manifestPath = '')
    {
        return ManifestParser::get(...func_get_args());
    }
}

if (! function_exists('manifest_icon_search')) {
    /**
     * Search manifest file by key and value.
     *
     * @param  string  $key
     * @param  string  $value
     * @param  string  $manifestPath
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function manifest_icon_search($key, $value, $manifestPath = '')
    {
        return ManifestParser::iconSearch(...func_get_args());
    }
}
