<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit315f29968d062694a6c3f286886bfc6a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhoneList\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhoneList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit315f29968d062694a6c3f286886bfc6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit315f29968d062694a6c3f286886bfc6a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}