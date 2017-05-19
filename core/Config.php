<?php

namespace App\Core;
/**
 * Class Config
 *
 * A basic configuration manager.
 *
 * Provides the means to define 'default' configuration, which can be empty and added to git;
 * and 'local' configuration which can override the values given in the default, if any.
 *
 * Configuration is expressed as a 'tree' or array-of-arrays-of-* to any depth, to organise values
 * nicely, and retrieved using a path syntax.
 *
 * Example config definition might be:
 *
 * Config::local([
 *  "databases" => [
 *      "test" => [
 *          "hostname" => "localhost",
 *          "username" => "myuser",
 *          ...
 *      ]
 *   ]
 * ]);
 *
 * And retrieving as follows:
 *
 * $conn = Config::get( "databases/test" ); // Array of values
 * $hostname = Config::get( "databases/test/hostname" );    // String
 *
 */
class Config
{
    static $delimiter = "/";
    static $local = [];
    static $defaults = [];

    /**
     * Retrieve the named configuration item. Accepts a path to any point in the configuration tree.
     *
     * @param $name
     * @return array|mixed
     * @throws \Exception
     */
    static function get($name)
    {
        $parts = explode( self::$delimiter, $name );

        $l = self::$local;
        $d = self::$defaults;

        foreach( $parts as $part )
        {
            if( !array_key_exists( $part, $l ) )
            {
                if( array_key_exists( $part, $d ) )
                    $l = $d[$part];
                else
                    throw new \Exception( "Missing configuration item " . $name );
            }
            else
                $l = $l[$part];

            if( array_key_exists( $part, $d ) )
                $d = $d[$part];

        }
        return( $l );
    }

    /**
     * Define local configuration, overriding any values given in the default configuration.
     *
     * @param $def
     */
    static function local($def)
    {
        self::$local = $def;
    }

    /**
     * Define the default configuration. This should give every configuration item used in an application,
     * even if the value is empty, as the default file can be added to git for a meaningful record,
     * with the local configuration overriding the defaults and kept outside git.
     *
     * @param $def
     */
    static function defaults($def)
    {
        self::$defaults = $def;
    }
}

