<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cca5135b487199f52e98214a7627cc3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'apimatic\\jsonmapper\\' => 20,
        ),
        'U' => 
        array (
            'Unirest\\' => 8,
        ),
        'P' => 
        array (
            'PagarmeApiSDKLib\\' => 17,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'CoreInterfaces\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'apimatic\\jsonmapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/jsonmapper/src',
        ),
        'Unirest\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/unirest-php/src',
        ),
        'PagarmeApiSDKLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/pagarme/pagarme-php-sdk/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/core/src',
        ),
        'CoreInterfaces\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/core-interfaces/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rs\\Json' => 
            array (
                0 => __DIR__ . '/..' . '/php-jsonpointer/php-jsonpointer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cca5135b487199f52e98214a7627cc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cca5135b487199f52e98214a7627cc3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8cca5135b487199f52e98214a7627cc3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8cca5135b487199f52e98214a7627cc3::$classMap;

        }, null, ClassLoader::class);
    }
}
