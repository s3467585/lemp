<?php
session_start();
date_default_timezone_set('Asia/Yekaterinburg');
$domen = $_SERVER['HTTP_HOST'];

require_once($_SERVER['DOCUMENT_ROOT']."/core/connect.php");


#$url = $SERVER['http://default.test:8888/portfolio/publicator/'];
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

echo 'COMMON_PHP-$url: ';                  #!!!!!!!!!!!!!!!!!!!
echo var_dump($url).'</br>';               #!!!!!!!!!!!!!!!!!!

// Подключение справочника
if ($link == 'manual') {
    require_once($_SERVER['DOCUMENT_ROOT']."/manual/index.php");
}

$module = ($link == '' || $link == 'index.php' || $link == 'login.html') ? 'main' :
    (($link == 'admin') ? 'admin' :
        (($link == 'contacts' || $link == 'search') ? 'page' :
            (($link == 'blog') ? 'blog' :
                (($link == 'portfolio') ? 'portfolio' : 'page')));

if($module !== 'admin' && $link != 'manual'){
    require_once($_SERVER['DOCUMENT_ROOT']."/modules/404.php");

    if($module == '404'){
        header("HTTP/1.0 404 Not Found");
    }

    // Получение всех мета-тегов
    require_once($_SERVER['DOCUMENT_ROOT']."/core/meta.php");


    


    // Вывод всех опций
    if($query = mysqli_query($connect, "SELECT * FROM options") and mysqli_fetch_assoc($query) !=''){
        mysqli_data_seek($query, 0);

        $e = mysqli_fetch_assoc($query); #!!!!!!!!!!!!!!!!
        $r = mysqli_data_seek($query, 0); #!!!!!!!!!!!!!!!

        echo('COMMON_PHP_mysqli_fetch_assoc($query): ');     #!!!!!!!!!!!!!!!
        echo var_dump($e).'</br>';                           #!!!!!!!!!!!!!!!
        echo('COMMON_PHP_mysqli_data_seek($query, 0): ');    #!!!!!!!!!!!!!!!
        echo $r.'</br>';                                     #!!!!!!!!!!!!!!!

        while($row = mysqli_fetch_assoc($query)){
            ${$row['name']} = $row['value'];
            
            $t=${$row['name']}; #!!!!!!!!!!!!!!!!!

            echo('COMMON_PHP_${$row["name"]}: ');       #!!!!!!!!!!!!!!!
            echo var_dump($t).'</br>';                          #!!!!!!!!!!!!!!!
        
            
        }
    }

    // Вывод шапки
    require_once($_SERVER['DOCUMENT_ROOT']."/core/header.php");

    if($module == 'main'){
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/portfolio.php");
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/blog.php");
    }

    // Проверка существования модуля
    if(file_exists($_SERVER['DOCUMENT_ROOT']."/modules/$module.php")){
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/$module.php");

    }else{
        echo "Страница не найдена, т.к. отсутствует модуль.";
    }
    if($module == '404'){
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/page.php");
    }

    // Вывод подвала
    require_once($_SERVER['DOCUMENT_ROOT']."/core/footer.php");
}else if ($link != 'manual') {
    require_once($_SERVER['DOCUMENT_ROOT']."/backend/admin.php");
}








