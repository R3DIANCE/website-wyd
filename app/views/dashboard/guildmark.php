<?php
if (!defined('LOCAL')) exit();
?>
<div class="col-md-12">
    <form method="POST">
        <div class="form-group">
            <input class="form-control mt-3" type="number" name="guildid" placeholder="GuildID">
        </div>
        <div class="form-group">
            <input class="form-control-file mt-3" type="file" name="guildmark" placeholder="Guildmark">
            <small id="guildmarkHelp" class="form-text text-muted">Faça upload apenas de BMP (16x14) 16bits!</small>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary w-50">
                Enviar guildmark
            </button>
        </div>
    </form>
</div>