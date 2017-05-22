<?php

namespace App\Core;

class App
{
    protected static $entityManager;
    protected static $registry= [];

    public static function bind($key, $value)
    {
       static::$registry[$key] = $value;
    }

    public function get($key)
    {
        if(!array_key_exists($key, static::$registry)){
           throw new \Exception("No $key is bound in the container.");
        }
        return static::$registry[$key];
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public static function getEntityManager()
    {
        return self::$entityManager;
    }

    /**
     * @param $em
     */
    public static function setEntityManager($em)
    {
        self::$entityManager = $em;
    }
}