<?php


use Dotenv\Dotenv;

if (!isset($_SESSION)) session_start();

define('BASE_PATH', realpath(__DIR__.'/../../'));

require_once  __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../routes/routes.php';


//Init env variables
$dot_env = Dotenv::create(BASE_PATH);
$dot_env->load();

//Init Database
new \App\Entities\Database();

//Init Router
new \App\RouterDispatcher($router);