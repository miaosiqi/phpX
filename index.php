
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





  require_once Router::load($routes)->direct(Request::uri());

