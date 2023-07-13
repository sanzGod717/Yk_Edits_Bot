<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9bd14c46ead8e338b1353bb61f86855a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9bd14c46ead8e338b1353bb61f86855a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9bd14c46ead8e338b1353bb61f86855a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9bd14c46ead8e338b1353bb61f86855a::$classMap;

        }, null, ClassLoader::class);
    }
}
