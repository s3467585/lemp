<?php
	session_start();
	date_default_timezone_set('Asia/Yekaterinburg');
	$domen = $_SERVER['HTTP_HOST'];

	require_once($_SERVER['DOCUMENT_ROOT']."/core/connect.php"); // стартуем базу данных
	require_once ($_SERVER['DOCUMENT_ROOT']."/system/functions.php"); // стартуем функции

	$url = $_SERVER['REQUEST_URI'];
	$replace = array("?", "=");
	$url = str_replace($replace, "/", $url);
	$url = explode("/", $url);

	$link = $url[1]; // 1 уровень вложенности
	$title = '';
	$description = '';
	$linkId = '';
	$pageName = '';
	$out = '';
	$breadCrumb = '';

	//echo 'COMMON_PHP-$url: ';                  #!!!!!!!!!!!!!!!!!!!
	//echo var_dump($url).'</br>';               #!!!!!!!!!!!!!!!!!!

	if ($_SESSION['user']) {
		$module = 'user';	

	} else {

		$module = ($link == '' || $link == 'index.php' || $link == 'auth.php') ? 'main' :
	    (($link == 'admin') ? 'admin' :
	        (($link == 'register' || $link == 'search') ? 'register' :
	            (($link == 'blog') ? 'blog' : 
	            	(($link == 'user' ) ? 'main' : 'main'))));
	}


	/*$module = ($link == '' || $link == 'index.php' || $link == 'auth.php') ? 'main' :
    (($link == 'admin') ? 'admin' :
        (($link == 'register' || $link == 'search') ? 'register' :
            (($link == 'blog') ? 'blog' :
                (($link == 'user' ) ? 'user' : 'main'))));
*/
	//if($module !== 'admin' && $link != 'manual'){
	//    require_once($_SERVER['DOCUMENT_ROOT']."/modules/404.php");

	//    if($module == '404'){
	//        header("HTTP/1.0 404 Not Found");
	//    }



	// Вывод шапки
    require_once($_SERVER['DOCUMENT_ROOT']."/core/header.php");

    if($module == 'main'){
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/main.php");
    }

    // Проверка существования модуля
    //if(file_exists($_SERVER['DOCUMENT_ROOT']."/modules/$module.php")){
    //    require_once($_SERVER['DOCUMENT_ROOT']."/modules/$module.php");

    //}else{
    //    echo "Страница не найдена, т.к. отсутствует модуль.";
    //}
    // Вывод формы регистрации
    if($module == 'register'){
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/register.php");
    }

	if($module == 'user'){
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/user.php");
    }    

    // Вывод подвала
    require_once($_SERVER['DOCUMENT_ROOT']."/core/footer.php");
//}else if ($link != 'manual') {
//    require_once($_SERVER['DOCUMENT_ROOT']."/backend/admin.php");
//}
