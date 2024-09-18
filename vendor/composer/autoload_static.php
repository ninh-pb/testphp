<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b14c35a1016e0e322d8ae5725e70876
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vnlab\\Php\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vnlab\\Php\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b14c35a1016e0e322d8ae5725e70876::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b14c35a1016e0e322d8ae5725e70876::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b14c35a1016e0e322d8ae5725e70876::$classMap;

        }, null, ClassLoader::class);
    }
}
