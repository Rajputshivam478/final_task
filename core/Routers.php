<?php

namespace core;

class Routers
{
    public $routers = [];
    public function define($routers)
    {
        $this->routers = $routers;
    }
    public function redirect($url)
    {   
        try {
            // $this->routers[$url];
            // die();
            if (key_exists($url, $this->routers)) {
                $arr = [...explode("@", $this->routers[$url])];
                return $this->callAction($arr[0], $arr[1]);
                // $this->routers[$url];
            }
            throw new \Exception('page not found');
        } catch (\Exception $e) {
            header('location: ./404');
        }
    }

    public function callAction($controller, $action)
    {
        if (method_exists($controller, $action)) {
            return (new $controller)->$action();
        }

        throw new \Exception('Page not Found');
    }
}