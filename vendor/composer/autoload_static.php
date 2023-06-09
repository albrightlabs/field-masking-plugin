<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43f617cddb900cce9eac3ff90fb1ad6e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43f617cddb900cce9eac3ff90fb1ad6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43f617cddb900cce9eac3ff90fb1ad6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43f617cddb900cce9eac3ff90fb1ad6e::$classMap;

        }, null, ClassLoader::class);
    }
}
