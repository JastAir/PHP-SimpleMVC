<?php
require 'vendor/autoload.php';

use Core\Route;
use Tracy\Debugger;

function my_session_start()
{
    session_start();

    if (!isset($_SESSION['id']))
        $_SESSION['id'] = $newid = uniqid('PHPSC-');

    // Не разрешать использование слишком старых идентификаторов сессии
    if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
        session_destroy();
        session_start();
        $_SESSION['id'] = $newid = uniqid('PHPSC-');
    }
}

my_session_start();


require 'config.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//Debugger::enable();
error_reporting(E_ALL);

/*
 * Routing
 */
$router = new Route();

$router->add('', ['controller' => 'home', 'action' => 'index']);
$router->add('{controller}');
$router->add('{controller}/');
$router->add('{controller}/{action}');
$router->add('{controller}/{action}/');
$router->add('{controller}/{action}/{id:\d+}');

$router->dispatch($_SERVER['QUERY_STRING']);
