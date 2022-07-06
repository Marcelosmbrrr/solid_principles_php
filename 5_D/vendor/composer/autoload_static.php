<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64a86c8d58e809bd28042101cc7393e7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64a86c8d58e809bd28042101cc7393e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64a86c8d58e809bd28042101cc7393e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64a86c8d58e809bd28042101cc7393e7::$classMap;

        }, null, ClassLoader::class);
    }
}