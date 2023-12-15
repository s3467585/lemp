<!-- Форма авторизации -->
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="Signin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header align-self-center p-5 pb-4 border-bottom-0">
                <h3 class="fw-bold mb-0 fs-2 text-center text-danger">Вход в панель Администратора</h3>
            </div>

            <div class="modal-body p-5 pt-0">
                <form form action="/sup/signin" method="POST" class="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" placeholder="Введите логин" name="login" id="login" autocomplete="login">
                        <label for="login">Логин</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" placeholder="Введите пароль" name="password" id="password" autocomplete="off">
                        <label for="password">Пароль</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Вход</button>
                    <hr class="my-4">
                    <div class="text-center">
                        <small class="text-body-secondary align-self-center">
                            <a href="/">Главная</a>
                        </small>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>