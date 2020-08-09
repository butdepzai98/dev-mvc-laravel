<?php
/**
 * Start session if not already started
 */
if(!isset($_SESSION)) session_start();

//Load enviroment
require_once __DIR__.'/../app/config/_env.php';

//instance Database class
new \App\classes\Database;

//Load route
require_once __DIR__.'/../app/routing/routes.php';

//$router is define in routes.php
new \App\Routing\RouteDispatcher($router);