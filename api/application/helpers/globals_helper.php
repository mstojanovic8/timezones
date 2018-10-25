<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Application specific global variables
class Globals
{
    private static $authToken = null;
    private static $initialized = false;

    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::$authToken = null;
        self::$initialized = true;
    }

    public static function setAuthToken($token)
    {
        self::initialize();
        self::$authToken = $token;
    }


    public static function getAuthToken()
    {
        self::initialize();
        return self::$authToken;
    }
}