<?php

use App\Support\ManifestAsset;

if (! function_exists('manifest_asset')) {
    /**
     * Get the path to a versioned manifest file.
     *
     * @param  string  $assetPath
     * @param  string  $manifestpath
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function manifest_asset($assetPath, $manifestPath = '')
    {
        return app(ManifestAsset::class)(...func_get_args());
    }
}
