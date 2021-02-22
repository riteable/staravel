<?php

namespace App\Support;

use Exception;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ManifestParser
{
    /**
     * Get manifest file.
     *
     * @param  string  $manifestPath
     * @return array
     *
     * @throws \Exception
     */
    public static function load($manifestPath = '')
    {
        static $manifests = [];

        if ($manifestPath) {
            $manifestPath = public_path($manifestPath);
        } else {
            $manifestPath = public_path('/manifest.json');
        }

        if (! isset($manifests[$manifestPath])) {
            if (! is_file($manifestPath)) {
                throw new Exception('The manifest does not exist.');
            }

            $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
        }

        return $manifests[$manifestPath];
    }

    /**
     * Get the path to a versioned manifest file.
     *
     * @param  string  $assetPath
     * @param  string  $manifestPath
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    public static function get($key, $manifestPath = '')
    {
        $manifest = static::load($manifestPath);

        if (! isset($manifest[$key])) {
            throw new Exception("Cannot find: {$key}.");
        }

        return new HtmlString($manifest[$key]);
    }

    /**
     * Get an icon by key and value.
     *
     * @param  string  $assetPath
     * @param  string  $manifestPath
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    public static function iconSearch($key, $value, $manifestPath = '')
    {
        $manifest = static::load($manifestPath);

        $icons = $manifest['icons'] ?? [];

        if (empty($icons)) {
            throw new Exception('No icons set in manifest.');
        }

        $icon = Arr::deepSearch($icons, $key, $value, true);

        if (! $icon) {
            throw new Exception('Cannot find icon in manifest.');
        }

        if (! isset($icon['src'])) {
            throw new Exception('Icon src not set.');
        }

        return new HtmlString($icon['src']);
    }
}
