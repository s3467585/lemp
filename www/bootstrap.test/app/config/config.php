<?php

if ($_SERVER['SERVER_NAME'] == 'bootstrap.test') {

	/** database config **/
	define('DBNAME', 's92243jz_sovhome');
	define('DBHOST', 'lemp_mysql');
	define('DBUSER', 's92243jz_sovhome');
	define('DBPASS', 'qwerty');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/testmvc/public');

} else {
	/** database config **/
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'http://sovhome.ru');

}

define('APP_NAME', "SovHome");
define('APP_DESC', "Home IoT site");

/** true means show errors **/
define('DEBUG', true);
error_reporting(E_ALL);
