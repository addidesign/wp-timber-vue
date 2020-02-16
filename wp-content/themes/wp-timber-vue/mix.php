<?php

use Illuminate\Support\Str;

if (! function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     * @return string
     *
     * @throws \Exception
     */

    function mix($path, $manifestDirectory = '')
    {
        static $manifest;
        $publicFolder = '/wp-content/themes/wp-timber-vue/dist';
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $publicPath = $rootPath . $publicFolder;

        if ($manifestDirectory && ! Str::startsWith($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        if (! $manifest) {
            if (! file_exists($manifestPath = ($publicPath . $manifestDirectory.'/mix-manifest.json'))) {
              throw new Exception('The Mix manifest does not exist.');
            }
            $manifest = json_decode(file_get_contents($manifestPath), true);
        }

        if (! Str::startsWith($path, '/')) {
            $path = "/{$path}";
        }

        if (! array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your ".
                'webpack.mix.js output paths and try again.'
            );
        }
        return file_exists($publicPath . ($manifestDirectory.'/hot'))
                    ? "http://localhost:8080{$manifest[$path]}"
                    : '-content/themes/wp-timber-vue/dist'.$manifest[$path];
    }
}
