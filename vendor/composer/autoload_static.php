<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a297c1151b0366313cfbc3404070c4c
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vehicle\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vehicle\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a297c1151b0366313cfbc3404070c4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a297c1151b0366313cfbc3404070c4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a297c1151b0366313cfbc3404070c4c::$classMap;

        }, null, ClassLoader::class);
    }
}