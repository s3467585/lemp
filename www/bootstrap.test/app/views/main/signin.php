<!-- Форма авторизации -->
<!--
<div class="modal modal-sheet position-static d-block" tabindex="-1" role="dialog" id="Signin">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-4 shadow">
			<div class="modal-header align-self-center">
				<h3 class="fw-bold mb-0 fs-2 text-center">Авторизация</h3>
			</div>

			<div class="modal-body p-5 pt-0">
				<form form action="/signin" method="POST" class="">
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-right-to-bracket"></i></span></span>
						<div class="form-floating">
							<input type="text" class="form-control rounded-end-3" placeholder="Введите логин" name="login" id="login" autocomplete="login" autofocus="autofocus">
							<label for="login">Логин</label>
						</div>
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><span class="icon"><i class="fa-solid fa-key"></i></i></span></span>
						<div class="form-floating">
							<input type="password" class="form-control rounded-end-3" placeholder="Введите пароль" name="password" id="password" autocomplete="off">
							<label for="login">Пароль</label>
						</div>
					</div>

					<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Вход</button>
					<hr class="my-4">
					<div class="text-center">
						<small class="text-body-secondary align-self-center">У вас нет аккаунта? - <a class="text-body-secondary" href="/signup">зарегистрируйтесь</a></small>
						<div class="form_massege">
							<?php $message; ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
-->

<!-- Форма авторизации и регистрации -->
<div class="form">
	<ul class="tab-group">
	<li class="tab active"><a href="#login">Авторизация</a></li>	
	<li class="tab"><a href="#signup">Регистрация</a></li>
		
	</ul>
	<div class="tab-content">
	<div id="login">
			<h1>Добро пожаловать!</h1>

			<form action="/" method="post">

				<div class="field-wrap">
					<label>
						E-mail<span class="req">*</span>
					</label>
					<input type="email" required autocomplete="off" />
				</div>

				<div class="field-wrap">
					<label>
						Пароль<span class="req">*</span>
					</label>
					<input type="password" required autocomplete="off" />
				</div>

				<!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

				<button class="button button-block" />Войти</button>

			</form>

		</div>
		
	
	<div id="signup">
			<h1>Регистрация</h1>
			<form action="/" method="post">

				<div class="top-row">
					<div class="field-wrap">
						<label>
						Имя<span class="req">*</span>
						</label>
						<input type="text" required autocomplete="off" />
					</div>

					<div class="field-wrap">
						<label>
							Фамилия<span class="req">*</span>
						</label>
						<input type="text" required autocomplete="off" />
					</div>
				</div>

				<div class="field-wrap">
					<label>
						Email<span class="req">*</span>
					</label>
					<input type="email" required autocomplete="off" />
				</div>

				<div class="field-wrap">
					<label>
						Пароль<span class="req">*</span>
					</label>
					<input type="password" required autocomplete="off" />
				</div>
				<div class="field-wrap">
					<label>
						Подтвердите пароль<span class="req">*</span>
					</label>
					<input type="password" required autocomplete="off" />
				</div>

				<button type="submit" class="button button-block" />Зарегистрироваться</button>

			</form>

		</div>

		

	</div><!-- tab-content -->

</div> <!-- /form -->

