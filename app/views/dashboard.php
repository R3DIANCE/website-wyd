<?php
if (!defined('LOCAL')) exit();
?>
<div class="container px-0 mt-4">
    <div class="col-md-12 px-0">
        <ul class="nav bg-dark border rounded-top nav-tabs" id="nav-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active border-0" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-home" aria-selected="true">
                    Meu perfil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-0" id="nav-guildmark-tab" data-toggle="tab" href="#nav-guildmark" role="tab" aria-controls="nav-home" aria-selected="true">
                    Guildmark
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-0" id="nav-player-tab" data-toggle="tab" href="#nav-player" role="tab" aria-controls="nav-home" aria-selected="true">
                    Meus personagens
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-12 px-0">
        <div class="tab-content bg-white p-3 border border-top-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <?php require_once('dashboard/myprofile.php'); ?>
            </div>
            <div class="tab-pane fade" id="nav-guildmark" role="tabpanel" aria-labelledby="nav-guildmark-tab">
                <?php require_once('dashboard/guildmark.php'); ?>
            </div>
            <div class="tab-pane fade" id="nav-player" role="tabpanel" aria-labelledby="nav-player-tab">
                Meus personagens
            </div>
        </div>
    </div>
</div>