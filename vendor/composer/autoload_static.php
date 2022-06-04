<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87d6378285266c72b48ad3d2b0e76089
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87d6378285266c72b48ad3d2b0e76089::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87d6378285266c72b48ad3d2b0e76089::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87d6378285266c72b48ad3d2b0e76089::$classMap;

        }, null, ClassLoader::class);
    }
}
