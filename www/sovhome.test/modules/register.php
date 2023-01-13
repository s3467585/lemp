<?php
	session_start ();

	if ($_SESSION['user']){
	header ('Location: /user');
	}


	if (isset ($_SESSION['message'])) {
		// если есть ошибка выводим сообщение
		$message .= '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
		}
		unset ($_SESSION['message']);

	require_once($_SERVER['DOCUMENT_ROOT']."/templates/register.html");
?> 

