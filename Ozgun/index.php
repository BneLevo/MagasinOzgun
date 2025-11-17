<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require le composant
require __DIR__ . '/vendor/autoload.php';

// le fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();




require 'config/Constant.php';
require CONTROLLER_PATH . 'Controller.php';

$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? null;

switch($action){
    case '' :
    case 'home':
        $controller = new Controller();
        $controller->HomePage();
        break;
    case 'chaussures':
            $controller = new Controller();
            $controller->shoePage($id);
        break;
    default :
        include VIEW_PATH . '404.php';
        break;
}

