<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcdb84bbb0c7b6cb1558d69b800ba16d9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcdb84bbb0c7b6cb1558d69b800ba16d9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcdb84bbb0c7b6cb1558d69b800ba16d9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcdb84bbb0c7b6cb1558d69b800ba16d9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
