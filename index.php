<?php

require ('core/bootstrap.php');
//
//  require('Guests.php');
//  $query = require('core/bootstrap.php');
//
//  $myGuests = $query -> selectAll('myguests');
//
//  $guests = array_map(function ($guest){
//      return 'ture it is';
//  }, $myGuests);
//var_dump($guests);




  require Router::load("routes.php")->direct(Request::uri());
//$router = Router::load("routes.php");
//require $router->direct(Request::uri());