<?php

    class Router{
        public  $routes = [
            'GET' => [],
            'POST' => []
        ];

        public static function load($file){
            $router = new Static;

//            $router->routes = $routes;
//            router::$routes = $routes;
//            $router->define($routes);
            require $file;

            return $router;
        }

        public function define($routes){
            $this->routes = $routes;
        }

        public function get($uri, $controller){
            $this->routes['GET'][$uri] = $controller;
        }

        public function post($uri, $controller)
        {
            $this->routes['POST'][$uri] = $controller;
        }

        public function direct($uri,$requestType)
        {
//            return $this->routes[$uri];
            if (array_key_exists($uri, $this->routes[$requestType]))
            {
                return $this->routes[$requestType][$uri];
            }else{
                echo 'die';
            }
        }


    }