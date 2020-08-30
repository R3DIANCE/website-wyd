<?php
if (!defined('LOCAL')) exit();
?>
<div class="col-md-12">
    <form method="POST">
        <div class="form-group">
            <input class="form-control mt-3" type="text" name="name" placeholder="Nome" value="<?= $_SESSION['login']['name'] ?>">
        </div>
        <div class="form-group">
            <input class="form-control mt-3" type="password" name="pass" placeholder="Nova senha">
        </div>
        <div class="form-group">
            <input class="form-control mt-3" type="password" name="pass2" placeholder="Repetir nova senha">
        </div>
        <div class="form-group">
            <input class="form-control mt-3" type="password" name="oldpass" placeholder="Senha atual">
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary w-50">
                Alterar perfil
            </button>
        </div>
    </form>
</div>