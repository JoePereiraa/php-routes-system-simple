<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff5d83c46984e99a101c5211956cf7aa
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff5d83c46984e99a101c5211956cf7aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff5d83c46984e99a101c5211956cf7aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff5d83c46984e99a101c5211956cf7aa::$classMap;

        }, null, ClassLoader::class);
    }
}
