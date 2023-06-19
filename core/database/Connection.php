<?php

namespace core\database;

class Connection{
    public static function make($config)
    {
        try {
            return new \PDO(
                $config['connection_name'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}