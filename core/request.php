<?php
    class Request {
        public static function uri(){
            $uri = trim($_SERVER['REQUEST_URI'], '/');
            return $uri;
        }
    }