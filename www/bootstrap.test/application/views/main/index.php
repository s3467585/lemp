

<div class="flat-form">
  <ul class="tabs">
    <li>
      <a href="#login" class="active">Login</a>
    </li>
    <li>
      <a href="#register">Register</a>
    </li>
    <li>
      <a href="#reset">Reset Password</a>
    </li>
  </ul>
  <div id="login" class="form-action show">
    <h1>Login on Flat UI</h1>
    <p>Lorem ipsum by <a href="https://codepen.io/davideast">David East</a> dolor sit amet, consectetur adipisicing elit. Veritatis, magni culpa facilis.</p>
    <form>
      <ul>
        <li>
          <input type="text" placeholder="Username" />
        </li>
        <li>
          <input type="password" placeholder="Password" />
        </li>
        <li>
          <input type="submit" value="Login" class="button" />
        </li>
      </ul>
    </form>
  </div>
  <!--/#login.form-action-->
  <div id="register" class="form-action hide">
    <h1>Register</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa repudiandae.</p>
    <form>
      <ul>
        <li>
          <input type="text" placeholder="Username" />
        </li>
        <li>
          <input type="password" placeholder="Password" />
        </li>
        <li>
          <input type="submit" value="Sign Up" class="button" />
        </li>
      </ul>
    </form>
  </div>
  <!--/#register.form-action-->
  <div id="reset" class="form-action hide">
    <h1>Reset Password</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, provident in accusamus possimus.</p>
    <form>
      <ul>
        <li>
          <input type="text" placeholder="Email" />
        </li>
        <li>
          <input type="text" placeholder="Birthday" />
        </li>
        <li>
          <input type="submit" value="Send" class="button" />
        </li>
      </ul>
    </form>
  </div>
  <!--/#register.form-action-->
</div>





















<!-- Форма авторизации -->
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="Signin">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-4 shadow">
			<div class="modal-header align-self-center p-5 pb-4 border-bottom-0">
				<h3 class="fw-bold mb-0 fs-2 text-center">Авторизируйтесь</h3>
			</div>

			<div class="modal-body p-5 pt-0">
				<form form action="/signin" method="POST" class="">
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-3" placeholder="Введите адрес своей почты" name="login" id="login" required>
						<label for="login">Логин</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-3" placeholder="Введите пароль" name="password" id="password" required>
						<label for="password">Пароль</label>
					</div>
					<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Вход</button>
					<hr class="my-4">
					<div class="text-center">
						<small class="text-body-secondary align-self-center">У вас нет аккаунта? - <a href="/signup">зарегистрируйтесь</a></small>
						<div class="form_massege">
							<?php $message; ?> 
						</div>	
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


