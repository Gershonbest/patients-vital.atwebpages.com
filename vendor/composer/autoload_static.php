<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb29f73a7ca27cd34a3afe3f212ef911c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb29f73a7ca27cd34a3afe3f212ef911c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb29f73a7ca27cd34a3afe3f212ef911c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb29f73a7ca27cd34a3afe3f212ef911c::$classMap;

        }, null, ClassLoader::class);
    }
}
