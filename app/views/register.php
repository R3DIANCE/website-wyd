<?php if (!defined('LOCAL')) exit(); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 bg-white shadow">
            <div class="text-center mt-3 bg-light p-3 col-md-12">
                <h4 class="text-dark">Registro</h4>
            </div>
            <div class="text-justify p-3 col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="inputName">Nome</label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                        <small id="nameHelp" class="form-text text-muted">Utilize apenas de 4 a 12 caracteres alfanuméricos!</small>

                    </div>
                    <div class="form-group">
                        <label for="inputUser">Usuário</label>
                        <input name="user" type="text" class="form-control" id="inputUser" aria-describedby="userHelp">
                        <small id="userHelp" class="form-text text-muted">Utilize apenas de 4 a 12 caracteres alfanuméricos!</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1">Senha</label>
                        <input name="pass" type="password" class="form-control" id="inputPassword1" aria-describedby="passHelp">
                        <small id="passHelp" class="form-text text-muted">Utilize apenas de 4 a 12 caracteres alfanuméricos!</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword2">Confirmar senha</label>
                        <input name="pass2" type="password" class="form-control" id="inputPassword2" aria-describedby="pass2Help">
                        <small id="pass2Help" class="form-text text-muted">Digite a senha novamente!</small>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">E-mail pode conter somente 50 caracteres!</small>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn w-50 btn-primary">Registrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>