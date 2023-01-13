<?php
	session_start ();

	if (!$_SESSION['user']){
	header ('Location: ../index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Профиль пользователя:</title>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>
		<div>
			<!--Профиль пользователя -->
			<form action="logout.php" method="POST">
				<h2>ФИО: <?= $_SESSION['user']['full_name'] ?></h2>
				<h2>Логин: <?= $_SESSION['user']['login'] ?></h2>
				<h2>E-Mail: <?= $_SESSION['user']['email'] ?></h2> 
				<button type="submit">Выйти</button>


				<?php 
				if (isset ($_SESSION['message'])) {
				// если есть ошибка выводим сообщение
					echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
				}
				unset ($_SESSION['message']);
				?>
			</form>
		</div>
	</body>
</html>