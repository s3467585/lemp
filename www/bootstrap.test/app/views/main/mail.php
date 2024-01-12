<!-- Форма mail -->
<div class="modal modal-sheet position-static d-block" tabindex="-1" role="dialog" id="Signin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header align-self-center border-bottom-0">
                <h3 class="fw-bold mb-0 fs-2 text-center">Написать письмо</h3>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="/mail" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><span class="icon"><i class="fa-solid fa-right-to-bracket"></i></span></span>
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-end-3" placeholder="Имя" name="name" id="name" autocomplete = "name" autofocus="autofocus">
                            <label for="name">Имя</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><span class="icon"><i class="fa-solid fa-key"></i></i></span></span>
                        <div class="form-floating">
                            <input type="email" class="form-control rounded-end-3" placeholder="E-mail" name="email" id="email" autocomplete ="email">
                            <label for="login">E-mail</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Сообщение" name="message" id="message" style="height: 100px"></textarea>
                        <label for="message">Сообщение</label>
                    </div>                    
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>