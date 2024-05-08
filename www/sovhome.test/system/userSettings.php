<?php
    header('Content-Type: text/html; charset=utf-8');
    
    require_once '../system/core.php'; // стартуем ядро двигателя
    require_once '../system/functions.php'; // стартуем функции

    $tempAlarm = protect($_POST["tempAlarm"]);	// критическая температура
    $user = protect($_POST["user"]);


    //var_dump($tempAlarm);
    //var_dump($user);

    if (isset($tempAlarm)) {
        mysqli_query($connect, "UPDATE `settings_".$user."` SET `value`='".$tempAlarm."' WHERE `id`= 'tempAlarm'");
    }

    header('Location: /');