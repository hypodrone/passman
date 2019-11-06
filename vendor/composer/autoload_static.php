<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc874765b871b171e753696b0c4f479e8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PassMan\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PassMan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/passlib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc874765b871b171e753696b0c4f479e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc874765b871b171e753696b0c4f479e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}