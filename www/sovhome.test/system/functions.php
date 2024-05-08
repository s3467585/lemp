<?php

session_start();

/* Функция отфильтровки чисел */
function int($int) {
	return abs((int)$int);
}

/* Функция защиты от нежелательных действий */
function protect($text) {
	//return trim(mysqli_real_escape_string($connect, htmlspecialchars($text, ENT_QUOTES, 'utf-8')));
	return $text;
}

/* Функция отображения времени */
function clock($time) {
	$time = $time;
	$timep= date("j M Y в H:i", $time);
	$time_p[0]=date("j n Y", $time);
	$time_p[1]=date("H:i", $time);
	if ($time_p[0]==date("j n Y", time()))$timep='Сегодня в '.$time_p['1'];
	if ($time_p[0]==date("j n Y", time()-86400))$timep='Вчера в '.$time_p['1'];
	$months_eng = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$months_rus = array('Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря');
	$timep = str_replace($months_eng,$months_rus,$timep);
	return $timep;
}

function datediff($date1, $date2)
{
	$diff = $date2 - $date1;
	$d=floor($diff/3600/24);
	$h=floor($diff/3600)%24;
	$m=floor(($diff%3600)/60);
	$s=($diff%3600)%60;
	//$s=($diff%60);

	if($d>0) {
		return $d.' д. '.$h.' ч. '.$m.' мин.';
	} elseif ($h>0) {
		return $h.' ч. '.$m.' мин.';
	} else
		return $m.' мин. '.$s.' сек.';
	
	
}

# Шапка
function head() {
	require ($_SERVER['DOCUMENT_ROOT'].'/style/head.php');
}

# Тело
function body() {
	require ($_SERVER['DOCUMENT_ROOT'].'/style/body.php');
}

# Низ
function foot() {
	require ($_SERVER['DOCUMENT_ROOT'].'/style/foot.php');
}

# Настройки
function settings($vars) {
	extract($vars);
	require ($_SERVER['DOCUMENT_ROOT'].'/style/settings.php');
}


# Тестовая страница
#function test() {
#	require ($_SERVER['DOCUMENT_ROOT'].'/style/test.php');
#}

# Проверка сколько прошло времени с момента последней отрпавки сообщения 
function checkTime($time, $sendInterval) {
    $time = time() - $time;
    //echo $time. "<br>";
    //echo $sendInterval. "<br>";
    if ($time >= $sendInterval){
        return true;
    } else {
        return false;
    }
    
}



# Отправка сообщения на Mail
function mailalarm($key, $temp1){   
	echo "Mail-alarm send";
	$sendTo = [
	    'sovhome'    => 's3467585@gmail.com',
		'mari'       => 'morckai.k@yandex.ru',
	];
	
	$url = "http://sovhome.ru/";
	
	if ($key != "sovhome"){
	    $url = "http://sovhome.ru/".$key;
	}

	// Формирование самого письма
	$title = "Критическая температура котла: ".$temp1." гр.Ц.";

	$body = "
	    <b></b><a href='".$url."'><button><h2>Проверить состояние котла</h2></button></a><br>
		<b>Имя: </b>SovHome<br>
		<b>Почта: </b>sovhome.info@mail.ru<br><br>";

	// Настройки PHPMailer
	$mail = new PHPMailer\PHPMailer\PHPMailer();

	try {
	    $mail->isSMTP();   
	    $mail->CharSet = "UTF-8";
	    $mail->SMTPAuth   = true;
	    //$mail->SMTPDebug = 2;
	    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

	    // Настройки вашей почты
	    $mail->Host       = 'smtp.mail.ru'; 					// SMTP сервера вашей почты
	    $mail->Username   = 'sovhome.info@mail.ru'; 		    // Логин на почте
	    $mail->Password   = 'jgDsxiCCAySx9sGJqxZp';                     // Пароль на почте jgDsxiCCAySx9sGJqxZp
	    $mail->SMTPSecure = 'ssl';
	    $mail->Port       = 465;   
	    $mail->setFrom('sovhome.info@mail.ru', 'SovHome'); 	    // Адрес самой почты и имя отправителя
 
	    // Получатель письма
	    $mail->addAddress($sendTo[$key]);  
	    $mail->addAddress('sovhome.info@mail.ru');    			// Ещё один, если нужен

	// Отправка сообщения
	$mail->isHTML(true);
	$mail->Subject = $title;
	$mail->Body = $body;    

	// Проверяем отравленность сообщения
	if ($mail->send()) {$result = "success";} 
	else {$result = "error";}

	} catch (Exception $e) {
	    $result = "error";
	    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
	    echo $status;
	}
}
?>