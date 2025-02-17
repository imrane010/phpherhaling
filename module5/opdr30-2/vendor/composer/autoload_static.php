<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ca15477b8feb467dbd812c36c8c2500
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opdr300\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opdr300\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ca15477b8feb467dbd812c36c8c2500::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ca15477b8feb467dbd812c36c8c2500::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ca15477b8feb467dbd812c36c8c2500::$classMap;

        }, null, ClassLoader::class);
    }
}
