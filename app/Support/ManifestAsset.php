<?php

namespace App\Support;

use Exception;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class ManifestAsset
{
    /**
     * Get the path to a versioned manifest file.
     *
     * @param  string  $assetPath
     * @param  string  $manifestPath
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    public function __invoke($assetPath, $manifestPath = '')
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

        $manifest = $manifests[$manifestPath];

        if (! isset($manifest[$assetPath])) {
            $exception = new Exception("Unable to locate file: {$assetPath}.");

            if (! app('config')->get('app.debug')) {
                report($exception);

                return $assetPath;
            } else {
                throw $exception;
            }
        }

        return new HtmlString($manifest[$assetPath]);
    }
}
