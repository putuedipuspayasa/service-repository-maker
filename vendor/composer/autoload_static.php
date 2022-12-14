<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31ecbc996e5ea9f61cc12eba2f7fca32
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aksara\\ServiceRepositoryMaker\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aksara\\ServiceRepositoryMaker\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit31ecbc996e5ea9f61cc12eba2f7fca32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31ecbc996e5ea9f61cc12eba2f7fca32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31ecbc996e5ea9f61cc12eba2f7fca32::$classMap;

        }, null, ClassLoader::class);
    }
}
