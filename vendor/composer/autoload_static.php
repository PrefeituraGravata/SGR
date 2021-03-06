<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc35f7a594347d2bc08d7b44bbbe6ed53
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc35f7a594347d2bc08d7b44bbbe6ed53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc35f7a594347d2bc08d7b44bbbe6ed53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc35f7a594347d2bc08d7b44bbbe6ed53::$classMap;

        }, null, ClassLoader::class);
    }
}
