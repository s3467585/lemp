<?php 
	session_start ();
	require_once ($_SERVER['DOCUMENT_ROOT'].'/core/connect.php');
	



	if (!$_POST['login']) {
        $_SESSION['message'] = 'Введите логин';
		header ('Location: / ');
		exit();
    } 

    // Проверка введен ли пароль
    if (!$_POST['password']) {
        $_SESSION['message'] = 'Введите пароль';
		header ('Location: / ');
		exit();
	}


	if(!empty($_POST['login']) && !empty($_POST['password'])) {

		$login=($_POST['login']);
	    $password=($_POST['password']);
    
    	//делаем запрос в БД на поиск пользователя

		$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

		if (mysqli_num_rows($check_user) > 0 AND $user = mysqli_fetch_assoc($check_user) AND $user['login'] !== '') {
		
			// если логин найден, проверяем пароль	

			if (password_verify($password, $user['password'])){

				//заполняем данными сессию пользователя
				$_SESSION['user'] = [
				"id" => $user['id'],
				"full_name" => $user['full_name'],
				"login" => $user['login'],
				"email" => $user['email'],
				"auth_time" => $user['auth_time'],
				"creation_time" => $user['creation_time']
			];

				$_SESSION['message'] = 'Пользователь: ' . $login . ' - авторизован';
				header ('Location: /user');

			} else {
				$_SESSION['message'] = 'Неверный пароль';
				header ('Location: /');
			}
		
		} else {

			// если логин не найден
			$_SESSION['message'] = 'Пользователь: ' . $login . ' - не найден, зарегистрируйтесь';
			header ('Location: /');
		} 

	} 
	    
?>
