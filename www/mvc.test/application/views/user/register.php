<!--Форма авторизации -->

<h1>Регистрация</h1>
<hr>
	<form action="../modules/singup.php" method="POST">
		<label>Ф.И.О</label>
		<input type="text" placeholder="Введите своё полное имя" name="full_name">
		<label>Логин</label>
		<input type="text" placeholder="Введите свой логин" name="login">
		<label>E-Mail</label>
		<input type="text" placeholder="Введите адрес своей почты" name="email">
		<label>Пароль</label>
		<input type="password" placeholder="Введите пароль" name="password">
		<label>Подтверждение пароля</label>
		<input type="password" placeholder="Подтвердите пароль" name="password_confirm">
		<button type="submit">Зарегистрироваться</button> 
		<p class="msg">
			У вас есть аккаунт? - <a href="/">авторизуйтесь</a>
		</p>
			<div class="main_form_massege">
				<?=$message;?>
			</div>	
	</form>