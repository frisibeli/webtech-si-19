<?php
require 'libs/Router.php';
require 'modules/UsersMngr/UserController.php';

$router = new Router();

$router->route('GET', 'users/(\d*)', function($matches){
    var_dump($matches);
    echo "GET Specific user";
});

$router->route('GET', 'users', function(){
    UserController::getAllUsers();
});

$router->route('GET', 'home', function(){
    UserController::home();
});

$router->run();