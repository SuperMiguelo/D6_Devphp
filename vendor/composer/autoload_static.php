<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7a038006547ffa231bbaf097194000b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
            'Metiers\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Animals\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Metiers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/Metiers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
        'Animals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/Animals',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7a038006547ffa231bbaf097194000b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7a038006547ffa231bbaf097194000b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7a038006547ffa231bbaf097194000b::$classMap;

        }, null, ClassLoader::class);
    }
}
