<?php

    class Router{
        protected  $routes = [];

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

        public function direct($uri)
        {
//            return $this->routes[$uri];
            if (array_key_exists($uri, $this->routes))
            {
                return $this->routes[$uri];
            }else{
                echo 'die';
            }
        }


    }