<?php
    function C($name, $method){
        require_once($name.'Controller.php');
        $controller = $name.'Controller';
        $obj = new $controller;
        $obj -> $method();
    }

?>