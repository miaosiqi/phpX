<?php

// $router->define([
//     '' => 'view/indexView.php',
//     'about' => 'controller/aboutController.php',
//     'test'  => 'controller/testController.php',
//     'home'  => 'controller/homeController.php',
//     'addinfo' => 'controller/addinfoController.php'
// ]);

 $router -> get('', 'view/indexView.php' );
 $router -> get('about', 'controller/aboutController.php');
 $router -> get('test', 'controller/testController.php');

 $router -> post('home', 'controller/homeController.php');
 $router -> post('addinfo', 'controller/addinfoController.php');