<?php

namespace App\config;

use App\config\request;

class  routes
{
    static array $routes = [];

     public static function add ($method, $path, $controller):void
    {
        self::$routes[] = compact('method', 'path', 'controller');
    }
    public static function get($path, $controller): void
    {
      self::add('GET', $path, $controller);
    }

    public static function post($path, $controller): void
    {
        self::add('POST', $path, $controller);
    }

    public static  function run(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($route['path'] === $uri && $route['method'] === $method) {

               if(is_array($route['controller'])){
                   $request = new request($_REQUEST);
                   $controller = new $route['controller'][0];
                   $method = $route['controller'][1];
                   $controller->$method($request);
                   return;
               }
            }
        }
       abort(404);
    }






}