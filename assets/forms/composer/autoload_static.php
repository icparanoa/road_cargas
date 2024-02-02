<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit857db667765e2c4c0a7af4a7781a6994
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit857db667765e2c4c0a7af4a7781a6994::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit857db667765e2c4c0a7af4a7781a6994::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit857db667765e2c4c0a7af4a7781a6994::$classMap;

        }, null, ClassLoader::class);
    }
}