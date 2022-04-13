<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03335b6927a40a501c2de59212be9714
{
    public static $files = array (
        '03c85e8b9992bb5b7d30aecad5bfd78f' => __DIR__ . '/../..' . '/source/Config.php',
        '80450288ceae37eb3fc225a05b7145f6' => __DIR__ . '/../..' . '/source/Session.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03335b6927a40a501c2de59212be9714::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03335b6927a40a501c2de59212be9714::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03335b6927a40a501c2de59212be9714::$classMap;

        }, null, ClassLoader::class);
    }
}