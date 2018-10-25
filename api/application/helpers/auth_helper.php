<?php

use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;

class Authorization
{
    public $test;

    /**
     * Generates JWT token based on data provided
     * @param $data array token data containing userId and role
     * @return string token value
     */
    public static function generate_token($data)
    {
        $CI =& get_instance();
        $key = $CI->config->item('jwt_key');

        
        return JWT::encode($data, $key);
    }

    /**
     * Validates provided JWT token
     * @param $token array token data
     * @return bool|object if valid, returns token object. Otherwise returns null
     */
    public static function validate_token($token)
    {
        $CI =& get_instance();
        $key = $CI->config->item('jwt_key');
        $algorithm = $CI->config->item('jwt_algorithm');
        try {
            $decoded = JWT::decode($token, $key, array($algorithm));
            return $decoded;
        } catch (Exception $e){
            return false;
        }
    }

    /**
     * Checks if Authorization header is present in request and if it contains token data
     * @param $headers array request headers
     * @return bool
     */
    public static function auth_header_exists($headers)
    {
        return (array_key_exists('Authorization', $headers)
            && !empty($headers['Authorization']));
    }
}