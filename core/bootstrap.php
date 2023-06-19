<?php
use core\database\Connection;
use core\database\QueryBuilder;
use core\App;
require_once './core/App.php';

App::bind('config', require_once './config.php');
require_once "./core/database/Connection.php";
require_once "./core/database/QueryBuilder.php";
require_once "./core/Request.php";

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));