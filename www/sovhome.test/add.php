<?php
    header('Content-Type: text/html; charset=utf-8');
    
    require_once 'system/core.php'; // стартуем ядро двигателя
    require_once 'system/functions.php'; // стартуем функции

    // Файлы phpmailer
	require_once 'lib/phpmailer/PHPMailer.php';
	require_once 'lib/phpmailer/SMTP.php';
	require_once 'lib/phpmailer/Exception.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
//  http://sovhome.ru/add.php?k=sovhome&rb=1
//  http://sovhome.ru/add.php?k=sovhome&t0=1&t1=10&t2=20 
    
$key = protect($_GET["k"]);
$uTabl = $key;  // Таблица с данными пользователя



// Специальный код для проверки устройства
if ($key != "sovhome") { 
	if ($key != "mari") {
	    exit;    
	}
}

$temp0 = protect($_GET["t0"]);	// температура улицы
$temp1 = protect($_GET["t1"]);  // температура котла
$temp2 = protect($_GET["t2"]);  // помещения
$reboot = protect($_GET["rb"]);
$ram = 1024;
//$ram = protect($_GET['ram']);
//$pir1 = protect($_GET['p1']);
//$pir2 = 0;
//$light = 0;
//$rele1 = 0;

# проверка температуры на критическое значение
$objekt = "температура";
$sendInterval = 300;
//$timeSend;

//echo $temp1;

if ($temp1 != '' and $temp1 < 20) {

    $mailSendTime = mysqli_fetch_row(mysqli_query($connect, "SELECT VALUE FROM `settings_".$uTabl."` WHERE `id` = 'mailSendTime'"))[0];
   
    if (checkTime($mailSendTime, $sendInterval)) {
        mailalarm($key, $temp1);
        mysqli_query($connect, "UPDATE `settings_".$uTabl."` SET `value`='".time()."' WHERE `id`= 'mailSendTime'");
    }
}



$total = mysqli_fetch_row(mysqli_query($connect, "SELECT count(*) FROM stat_".$uTabl))[0];

if ($total >= 25) {
	mysqli_query($connect, "DELETE FROM stat_".$uTabl." ORDER BY `id` ASC LIMIT 1");
}
mysqli_query($connect, "UPDATE `settings_".$uTabl."` SET `value`='".time()."' WHERE `id`= 'connection'");
mysqli_query($connect, "UPDATE `settings_".$uTabl."` SET `value`='".$ram."' WHERE `id`= 'ram'");

if ($reboot == 1) {
    $time = time() - $sendInterval;
	mysqli_query($connect, "UPDATE `settings_".$uTabl."` SET `value`='".time()."' WHERE `id`= 'reboot'");
	mysqli_query($connect, "UPDATE `settings_".$uTabl."` SET `value`='".$time."' WHERE `id`= 'mailSendTime'");
}

if ($temp0 !='') {
	mysqli_query($connect, "INSERT INTO stat_".$uTabl."(temp0, temp1, temp2, time) VALUES ($temp0, $temp1, $temp2, ".time().")");
} elseif ($pir1 !='') {
	mysqli_query($connect, "UPDATE `sensor` SET `pir1`='".$pir1."',`pir2`='".$pir2."',`rele1`='".$rele1."',`light`='".$light."'");
}
echo '<br>Data in Base is Ok';
?>
