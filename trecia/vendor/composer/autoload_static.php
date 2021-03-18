<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit157d0edec7efe87b37889ef2f21cc4a1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Miskas\\Mazas\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Miskas\\Mazas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bla',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit157d0edec7efe87b37889ef2f21cc4a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit157d0edec7efe87b37889ef2f21cc4a1::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit157d0edec7efe87b37889ef2f21cc4a1::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit157d0edec7efe87b37889ef2f21cc4a1::$classMap;

        }, null, ClassLoader::class);
    }
}
