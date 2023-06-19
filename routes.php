<?php

use core\Routers;

require_once "./App/controller/PageController.php";
require_once "./core/Routers.php";

$router = new Routers();

$router->define([
    '/FINALTASKPHP/' => 'PageController@home',
    '/FINALTASKPHP/assets' => 'PageController@home',
    '/FINALTASKPHP/categories' => 'PageController@category',
    '/FINALTASKPHP/user' => 'PageController@user',
    '/FINALTASKPHP/login' => 'PageController@login',
    '/FINALTASKPHP/logout' => 'PageController@logout',
    '/FINALTASKPHP/employee' => 'PageController@employee',
    '/FINALTASKPHP/404' => 'PageController@error_404',
    '/FINALTASKPHP/ajax.search.php' => 'PageController@ajax_search',
    '/FINALTASKPHP/ajax.update.php' => 'PageController@ajax_update',
    '/FINALTASKPHP/ajax.history.php' => 'PageController@ajax_history',
    '/FINALTASKPHP/ajax.delete.php' => 'PageController@ajax_delete',
]);