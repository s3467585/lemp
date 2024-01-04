<?php 

session_start ();

require "app/config/init.php";

use app\core\Router;
use app\lib\Database;


DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$router = new Router;
$router-> run();	





