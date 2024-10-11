<!-- Форма авторизации и регистрации -->
<div class="form">
	<ul class="tab-group">
	<li class="tab active"><a href="#login">Авторизация</a></li>	
	<li class="tab"><a href="#signup">Регистрация</a></li>
	</ul>
	
	<div class="tab-content">
		<!-- Авторизацияция -->
		<div id="login">
				<form form action="/signin" method="POST">
					<div class="field-wrap">
						<label>E-mail<span class="req">*</span></label>
						<input type="text" name="login" id="login" autocomplete="login" autofocus="autofocus">
						<!-- <input type="email" name="email" id="email" autocomplete="email"> -->
					</div>
					<div class="field-wrap">
						<label>
							Пароль<span class="req">*</span>
						</label>
						<input type="password" name="password" id="password" autocomplete="off">
					</div>

					<!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

					<button class="button button-block" type="submit">Войти</button>
				</form>
			</div>
			
		<!-- Регистрация -->
		<div id="signup">
				<form form action="/signup" method="POST">

					<div class="top-row">
						<div class="field-wrap">
							<label>Ф.И.О<span class="req">*</span>
							</label>
							<input type="text" name="full_name" id="full_name" autocomplete="full_name" autofocus="autofocus">
						</div>

						<div class="field-wrap">
							<label>Логин<span class="req">*</span>
							</label>
							<input type="text" name="login" id="login" autocomplete="login">
						</div>
					</div>

					<div class="field-wrap">
						<label>E-mail<span class="req">*</span>
						</label>
						<input type="email" name="email" id="email" autocomplete="email">
					</div>

					<div class="field-wrap">
						<label>Пароль<span class="req">*</span>
						</label>
						<input type="password" name="password" id="password" autocomplete="off">
					</div>
					<div class="field-wrap">
						<label>Подтвердите пароль<span class="req">*</span>
						</label>
						<input type="password" name="password_confirm" id="password_confirm" autocomplete="off">
					</div>

					<button type="submit" class="button button-block" />Зарегистрироваться</button>
				</form>
			</div>
	</div>
	<!-- tab-content -->
</div> 
<!-- /form -->

