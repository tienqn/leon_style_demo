<?php 

namespace Leonstyle\traits;

/**
 * Singleton
 */
trait Singleton 
{
    /**
     * instances
     *
     * @var array
     */
    private static $_instances = array();

    /**
     * get_instance
     *
     * @return void
     */
    public static function get_instance()
    {
        $class = get_called_class();

        if (!isset(self::$_instances[$class])) {
            self::$_instances[$class] = new $class();
        }
        
        return self::$_instances[$class];
    }
}