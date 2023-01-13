<?php

    /* Константы БД */

    define ('DBHOST', 'lemp_mysql');
    define ('DBUSER', 's92243jz_sovhome'); // Пользователь базы
    define ('DBPASS', 'qwerty'); // Пароль БД
    define ('DBNAME', 's92243jz_sovhome'); // Имя базы данных


    //Подключаемся к БД Хост, Имя пользователя MySQL, его пароль, имя нашей базы
    $connect = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    /* проверка соединения */
    if (mysqli_connect_errno()) {
        printf("Соединение не удалось: %s\n", mysqli_connect_error());
        exit();
    }

    //Кодировка данных получаемых из базы
    mysqli_query($connect, "SET NAMES utf8");

    /*// PDO
    try {  

      # MySQL через PDO_MYSQL  
      $DBH = new PDO("mysql:host=DBHOST;dbname=DBNAME", DBUSER, DBPASS);
      $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    }  
    catch(PDOException $e) {  
        //echo $e->getMessage();  
        echo "Проблемы с БД.";  
        file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    }*/
?>