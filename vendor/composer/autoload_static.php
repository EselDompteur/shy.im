<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb4873d35b045395b2dc0704aa0c197f
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'A' => 
        array (
            'AlgoliaSearch' => 
            array (
                0 => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitcb4873d35b045395b2dc0704aa0c197f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
