<?php 
	session_start ();
	
	require_once($_SERVER['DOCUMENT_ROOT']."/core/connect.php");
	require_once ($_SERVER['DOCUMENT_ROOT']."/system/functions.php"); // стартуем функции
	
	//Проверка на пустые поля 
	if (!$_POST['full_name']) {
        $_SESSION['message'] = 'Введите ваше Ф.И.О.';
		header ('Location: /register');
		exit();
    } else  $full_name = $_POST['full_name'];

    if (!$_POST['login']) {
        $_SESSION['message'] = 'Введите логин';
		header ('Location: /register');
		exit();
    } else $login = $_POST['login'];

	if (!$_POST['email']) {
	    $_SESSION['message'] = 'Введите E-mail';
		header ('Location: /register');
		exit();
	    } else $email = $_POST['email'];

	if (!$_POST['password']) {
		$_SESSION['message'] = 'Введите пароль';
		header ('Location: /register');
		exit();
	} else $password = $_POST['password'];
	
	if (!$_POST['password_confirm']) {
		$_SESSION['message'] = 'Введите пароль повторно';
		header ('Location: /register');
		exit();
	} else $password_confirm = $_POST['password_confirm'];

	//делаем запрос в БД на поиск пользователя
	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

	// если пользователь будет найден то авторизация
	if (signin($login, $password, $check_user)) {

	 	$_SESSION['message'] = 'Добро пожаловать, пользователь: ' . $login . ' - уже существует';
	 	header ('Location: /user');
		
		/*if ($password) {
			
			// проверяем логин в базе данных есть а поароль не совпадает	
			$_SESSION['message'] = 'Логин: ' . $login . ' - уже занят, придумайте другой';
			header ('Location: /register');
			exit(); 
	 	}*/

	// иначе создаём нового пользователя и авторизуем его
	} else {

		
		// проверка совпадения паролей в форме
	 	if ($password === $password_confirm) {

	 		//если пароли совпадают передаём данные на создание нового пользователя в базу.
	 		$db_pass = password_hash($password, PASSWORD_DEFAULT);
	 		mysqli_query ($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `creation_time`) VALUES (NULL, '$full_name', '$login', '$email', '$db_pass', NOW())");
	 		
	 		//создаём персональную таблицу БД для пользователя.
	 		$sql = "CREATE TABLE `stat_$login` (
	 			`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
	 			`temp0` SMALLINT NOT NULL , 
	 			`temp1` SMALLINT NOT NULL , 
	 			`temp2` SMALLINT NOT NULL , 
	 			`time` INT NOT NULL , 
	 			`timestemp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP , 
	 			PRIMARY KEY (`id`)) 
	 			ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci";

	 		if (!mysqli_query($connect, $sql)) {

				$_SESSION['message'] = mysqli_error($conn);
	 			header ('Location: /register');
			}
			
	 		$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
	 		// агтеция авторизации
	 		signin($login, $password, $check_user);

	 		$_SESSION['message'] = 'Пользователь: ' . $login . ' - зарегистрирован	';
	 		header ('Location: /user');

	 		} else {

	 			//пароли не совпадают
	 			$_SESSION['message'] = 'Пароли не совпадают!';
	 			header ('Location: /register');
	 		}
	}

?>