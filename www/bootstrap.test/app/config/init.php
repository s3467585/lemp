<?php 

require 'config.php';
require 'app/lib/functions.php';

spl_autoload_register(function($class) {
    $path = str_replace ('\\', '/', $class.'.php');

    if (file_exists($path)){
    	 require $path;
    }
    //include 'classes/' . $class . '.class.php';
});
