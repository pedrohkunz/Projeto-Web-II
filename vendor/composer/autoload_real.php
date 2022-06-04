<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit87d6378285266c72b48ad3d2b0e76089
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

        spl_autoload_register(array('ComposerAutoloaderInit87d6378285266c72b48ad3d2b0e76089', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit87d6378285266c72b48ad3d2b0e76089', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit87d6378285266c72b48ad3d2b0e76089::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
