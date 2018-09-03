<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7380564f5df2625ca246202dbcf41fef
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LyApi\\extend\\Xml2Array\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LyApi\\extend\\Xml2Array\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7380564f5df2625ca246202dbcf41fef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7380564f5df2625ca246202dbcf41fef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
