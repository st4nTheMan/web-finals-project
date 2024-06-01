<?php

    session_start();
    require(__DIR__.'/config/config.php');
    require(__DIR__.'/config/Connection.php');

    spl_autoload_register(function($class) {
        if(file_exists(__DIR__.'/controller/'.$class.'.php')) {
            require __DIR__.'/controller/' .$class.'.php';
        }

        if(file_exists(__DIR__.'/model/'.$class.'.php')) {
            require __DIR__.'/model/' .$class.'.php';
        }
    });

    $db = Connection::connect($config);

    require(__DIR__."/routes/route.php");

    if(!empty($route)) {
        $routes = explode('@', $route);
        $controller = ucfirst($routes[0]);
        $model = ucfirst(str_replace("Controller", '', $routes[0])).'Model';
        $action = lcfirst($routes[1]);
    }else {
        $controller = 'HomeController';
        $model = 'HomeModel';
        $action = 'indexAction';
    }

        $load_new = new $controller();
        $model = new $model();
        $load_new->model = $model;
        $model->db = $db;
        $index = $load_new->$action();

?>