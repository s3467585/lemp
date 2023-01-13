<?php
	session_start ();

	date_default_timezone_set('Asia/Yekaterinburg');

    require_once ($_SERVER['DOCUMENT_ROOT'].'/system/core.php'); // стартуем ядро БД
	require_once ($_SERVER['DOCUMENT_ROOT'].'/system/functions.php'); // стартуем функции

	if (!$_SESSION['user']) {
		$_SESSION['message'] = 'Вы не вошли в систему';
		header ('Location: /');
		exit();
	}


	if (isset ($_SESSION['message'])) {
        // если есть ошибка выводим сообщение
		$message .= '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset ($_SESSION['message']);


    //наполняем переменные из базы данных для отображения информации  
    $login = $_SESSION['user']['login'];
    $weather = mysqli_query($connect, "SELECT * FROM `stat_$login` ORDER BY `id` ASC LIMIT 15");
	$sensor = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `sensor`"));
	$query = mysqli_query($connect, "SELECT `id`, `value` FROM `settings` WHERE 1");
	while($arr=mysqli_fetch_assoc($query)) {
		$ard[$arr['id']]=$arr['value'];
	}
	$ram = floor(($ard['ram']/2048)*100);
	
//	$timeReal = 10 * 3600;  // корректировка часового пояса -10 часов между ЕКБ и Нью-Йорком

	while ($row = mysqli_fetch_assoc($weather)) {
		$temp0[] = $row['temp0'];
		$temp1[] = $row['temp1'];
   		$temp2[] = $row['temp2'];
		$time[] = clock($row['time']);
	}

    
    
    require_once($_SERVER['DOCUMENT_ROOT']."/templates/user.html");

?>
