<?php

namespace PhpUseful;

/**
 * Class EasyHeaders
 * @package PhpUseful
 *
 * This class list of the commonly used headers as easy to call static methods
 */
class EasyHeaders
{
    static function bad_request()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 400 BAD REQUEST',
            true,
            400);
        exit();

    }

    static function server_error()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error',
            true,
            500);
        exit();

    }

    static function not_found()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found',
            true,
            404);
        exit();
    }
    
    static function buildAnyheader(string $header) #for custom headers you can pass to this function
    {
        header($header);
    }
    
    static function buildAnyheader(string $headertype, string $headerVal)
    {
        header($headertype . $headerVal);
    }
        
    static function json_header()
    {
        header('Content-Type: application/json');
    }
    
    static function urlencoded_header()
    {
        header('Content-Type: application/x-www-form-url-encoded');
    }
    
    static function form_header()
    {
        header('Content-Type: multipart/form-data');
    }
    
    static function buildBasicAuth(string $userName, string $passw){
        header("Authorization: Basic " . base64_encode("$username:$password"));
    }
    
    static function acceptEncoding(string $encoding)
    {
        header("Accept-Charset: ". $encoding);
    }
    
    static function accept(string $type)
    {
        header("Accept :".$type);
    }
        
    static function accessControlRequestMethod (string $method)
    {
        header("Access-Control-Request-Method : ".$method);
    }
    
    static function cacheControl(string $val)
    {
        header("Cache-Control :".$val);
    }
    
    static function setCookie(string $cookie)
    {
        header("Cookie :".$cookie);
    }
        
    static function setOrigin(string $origin)
    {
        header("Origin : ".$origin);
    }

}
