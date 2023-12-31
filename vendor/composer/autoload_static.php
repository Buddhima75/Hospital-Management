<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf5314f70a93e962bb918ec537524f55
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf5314f70a93e962bb918ec537524f55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf5314f70a93e962bb918ec537524f55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf5314f70a93e962bb918ec537524f55::$classMap;

        }, null, ClassLoader::class);
    }
}
