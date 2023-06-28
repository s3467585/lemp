<!--Форма авторизации -->

<h1>Авторизация пользователя</h1>

<hr>
	<form action="../modules/singup.php" method="POST">
		<label>Логин</label>
		<input type="text" placeholder="Введите адрес своей почты" name="email" id="email" required>
		<label>Пароль</label>
		<input type="password" placeholder="Введите пароль" name="password" id="password" required>
		<button type="submit">Вход</button> 
		<p class="center">
			У вас нет аккаунта? - <a href="/register">зарегистрируйтесь</a>
		</p>
		<div class="form_massege">
			<?php $message; ?> 
		</div>	
	</form>
    


