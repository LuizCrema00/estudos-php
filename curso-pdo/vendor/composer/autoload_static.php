<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60fa3d86705d8077139d23b87c57bdd3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit60fa3d86705d8077139d23b87c57bdd3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60fa3d86705d8077139d23b87c57bdd3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60fa3d86705d8077139d23b87c57bdd3::$classMap;

        }, null, ClassLoader::class);
    }
}
