<?php
use core\Request;

require_once './vendor/autoload.php';
try {
    require_once "./core/bootstrap.php";
    require_once "routes.php";

    $router->redirect(Request::url());
} catch (Exception $e) {
    die($e->getMessage());
}