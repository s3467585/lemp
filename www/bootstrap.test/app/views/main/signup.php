<!-- Форма регистрации -->
<!-- Форма авторизации -->
<div class="modal modal-sheet position-static d-block" tabindex="-1" role="dialog" id="Signin">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-4 shadow">
			<div class="modal-header align-self-center p-5 pb-4 border-bottom-0">
				<h3 class="fw-bold mb-0 fs-2 text-center">Регистрация</h3>
			</div>

			<div class="modal-body p-5 pt-0">
				<form form action="/signup" method="POST" class="">
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-user"></i></i></span></span>
						<div class="form-floating">
							<input type="text" class="form-control rounded-end-3" placeholder="Введите своё полное имя" name="full_name" id="full_name" autocomplete="full_name" autofocus="autofocus">
							<label for="email">Ф.И.О</label>
						</div>
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-right-to-bracket"></i></i></span></span>
						<div class="form-floating">
							<input type="text" class="form-control rounded-end-3" placeholder="Введите своё полное имя" name="login" id="login" autocomplete="login">
							<label for="email">Логин</label>
						</div>
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-at"></i></span></span>
						<div class="form-floating">
							<input type="email" class="form-control rounded-end-3" placeholder="Введите адрес своей почты" name="email" id="email" autocomplete="email">
							<label for="email">E-mail</label>
						</div>
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-key"></i></i></span></span>
						<div class="form-floating">
							<input type="password" class="form-control rounded-end-3" placeholder="Введите пароль" name="password" id="password" autocomplete="off">
							<label for="password">Пароль</label>
						</div>
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-key"></i></i></span></span>
						<div class="form-floating">
							<input type="password" class="form-control rounded-end-3" placeholder="Подтвердите пароль" name="password_confirm" id="password_confirm" autocomplete="off">
							<label for="password">Подтверждение пароля</label>
						</div>
					</div>
					
					<button class="w-100 mb-2 btn btn-lg rounded-end-3 btn-primary" type="submit">Вход</button>
					<hr class="my-4">
					<div class="text-center">
						<small class="text-body-secondary align-self-center">У вас нет аккаунта? - <a class="text-body-secondary" href="/signin">авторизуйтесь</a></small>
						<div class="form_massege">
							<?php $message; ?> 
						</div>	
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="Signin">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-4 shadow">
			<div class="modal-header align-self-center p-5 pb-4 border-bottom-0">
				<h3 class="fw-bold mb-0 fs-2 text-center">Регистрация</h3>
			</div>

			<div class="modal-body p-5 pt-0">
				<form form action="/signup" method="POST" class="">
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-end-3" placeholder="Введите своё полное имя" name="full_name" id="full_name" autocomplete="full_name">
						<label for="email">Ф.И.О</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-end-3" placeholder="Введите своё полное имя" name="login" id="login" autocomplete="login">
						<label for="email">Логин</label>
					</div>
					<div class="form-floating mb-3">
						<input type="email" class="form-control rounded-end-3" placeholder="Введите адрес своей почты" name="email" id="email" autocomplete="email">
						<label for="email">E-mail</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-end-3" placeholder="Введите пароль" name="password" id="password" autocomplete="off">
						<label for="password">Пароль</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-end-3" placeholder="Подтвердите пароль" name="password_confirm" id="password_confirm" autocomplete="off">
						<label for="password">Подтверждение пароля</label>
					</div>
					<button class="w-100 mb-2 btn btn-lg rounded-end-3 btn-primary" type="submit">Зарегистрироваться</button>
					<hr class="my-4">
					<div class="text-center">
						<small class="text-body-secondary align-self-center">У вас есть аккаунт? - <a href="/signin">авторизуйтесь</a></small>
						<div class="form_massege">
							<?php $message; ?> 
						</div>	
					</div>
				</form>
			</div>
		</div>
	</div>
</div> -->