<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38ba51e01a26887269b32493e5e3f12a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\PathUtil\\' => 19,
            'Webmozart\\Json\\' => 15,
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Seld\\JsonLint\\' => 14,
        ),
        'M' => 
        array (
            'Madcoda\\Youtube\\' => 16,
        ),
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\PathUtil\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/path-util/src',
        ),
        'Webmozart\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/json/src',
        ),
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Seld\\JsonLint\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/jsonlint/src/Seld/JsonLint',
        ),
        'Madcoda\\Youtube\\' => 
        array (
            0 => __DIR__ . '/..' . '/madcoda/php-youtube-api/src',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
    );

    public static $classMap = array (
        'Feed' => __DIR__ . '/..' . '/dg/rss-php/src/Feed.php',
        'FeedException' => __DIR__ . '/..' . '/dg/rss-php/src/Feed.php',
        'Madcoda\\Youtube' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/compat.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38ba51e01a26887269b32493e5e3f12a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38ba51e01a26887269b32493e5e3f12a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38ba51e01a26887269b32493e5e3f12a::$classMap;

        }, null, ClassLoader::class);
    }
}
