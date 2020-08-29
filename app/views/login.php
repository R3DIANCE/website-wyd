<?php if (!defined('LOCAL')) exit(); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 bg-white shadow">
            <div class="text-center mt-3 bg-light p-3 col-md-12">
                <h4 class="text-dark">Login</h4>
            </div>
            <div class="text-justify p-3 col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="userInput">Usuário</label>
                        <input name="user" type="text" class="form-control" id="userInput" aria-describedby="userHelp">
                        <small id="userHelp" class="form-text text-muted">Utilize apenas de 4 a 12 caracteres alfanuméricos!</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1">Senha</label>
                        <input name="pass" type="password" class="form-control" id="inputPassword1" aria-describedby="passHelp">
                        <small id="passHelp" class="form-text text-muted">Utilize apenas de 4 a 12 caracteres alfanuméricos!</small>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn w-50 btn-primary">Entrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>