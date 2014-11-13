<?php
/**
 * Created by michaelwatts
 * Date: 11/11/2014
 * Time: 09:59
 *
 * SINGLETON PATTERN
 *
 * Sometimes it's important to have only one instance for a class. For example, in a system there should be only one window manager
 * (or only a file system or only a print spooler). Usually singletons are used for centralized management of internal or external
 * resources and they provide a global point of access to themselves.
 *
 * The singleton pattern is one of the simplest design patterns: it involves only one class which is responsible to instantiate itself,
 * to make sure it creates not more than one instance; in the same time it provides a global point of access to that instance.
 * In this case the same instance can be used from everywhere, being impossible to invoke directly the constructor each time.
 *
 *
 * INTENT
 *
 * Ensure that only one instance of a class is created.
 * Provide a global point of access to the object.
 */

namespace DesignPatterns\SingletonPattern;

require_once '../../loader.php';

class Singleton
{
    // private static $instance;

    /**
     * Protected constructor to prevent creating a new instance of this class via
     * the 'new' operator from outside this class.
     */
    protected function __construct()
    {
    }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Private clone method to prevent cloning of the instance of the singleton instance.
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the singleton instance.
     */
    private function __wakeup()
    {
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
            . implode(', ', $arguments) . "\n";
    }

    public function doSomething()
    {
        echo 'Singleton does something' . PHP_EOL;
    }

    public function doSomethingElse()
    {
        echo 'Singleton does something else' . PHP_EOL;
    }
}

class SingletonChild extends Singleton
{
}

$obj = Singleton::getInstance();

var_dump($obj === Singleton::getInstance());

$obj2 = SingletonChild::getInstance();
var_dump($obj2 === Singleton::getInstance());

var_dump($obj2 === SingletonChild::getInstance());

