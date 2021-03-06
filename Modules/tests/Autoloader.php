<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\tests
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\tests;

\spl_autoload_register('\Modules\tests\Autoloader::defaultAutoloader');

/**
 * Autoloader class.
 *
 * @package Modules\tests
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class Autoloader
{
    /**
     * Loading classes by namespace + class name.
     *
     * @param string $class Class path
     *
     * @example Autoloader::defaultAutoloader('\Modules\tests\Autoloader') // void
     *
     * @return void
     *
     * @throws AutoloadException Throws this exception if the class to autoload doesn't exist. This could also be related to a wrong namespace/file path correlation.
     *
     * @since 1.0.0
     */
    public static function defaultAutoloader(string $class) : void
    {
        $class = \ltrim($class, '\\');
        $class = \str_replace(['_', '\\'], '/', $class);

        if (!\is_file($path = __DIR__ . '/../../' . $class . '.php')) {
            return;
        }

        /** @noinspection PhpIncludeInspection */
        include_once $path;
    }

    /**
     * Check if class exists.
     *
     * @param string $class Class path
     *
     * @example Autoloader::exists('\Modules\tests\Autoloader') // true
     *
     * @return bool
     *
     * @since 1.0.0
     */
    public static function exists(string $class) : bool
    {
        $class = \ltrim($class, '\\');
        $class = \str_replace(['_', '\\'], '/', $class);

        return \is_file(__DIR__ . '/../../' . $class . '.php');
    }
}
