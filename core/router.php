<?php

    class Router{
        public static $routes = [];

        public static function load($routes){
            $router = new Static;

//            $router->routes = $routes;
            router::$routes = $routes;


            return $router;
        }

        public function direct($uri)
        {
//            return $this->routes[$uri];
            if (array_key_exists($uri, Static::$routes))
            {
                return Static::$routes[$uri];
            }else{
                echo 'die';
            }
        }


    }