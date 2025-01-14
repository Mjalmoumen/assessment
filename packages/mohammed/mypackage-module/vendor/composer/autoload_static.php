<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0c9f4cb529711bdc84e99b4542dccfb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mohammed\\MyPackageModule\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mohammed\\MyPackageModule\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0c9f4cb529711bdc84e99b4542dccfb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0c9f4cb529711bdc84e99b4542dccfb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0c9f4cb529711bdc84e99b4542dccfb::$classMap;

        }, null, ClassLoader::class);
    }
}
