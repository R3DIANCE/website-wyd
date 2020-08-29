<?php if (!defined('LOCAL')) exit(); ?>
<div class="col-md-12">
    <navbar class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="./">
            WYD TROLL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Expandir menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./news">
                        Notícias
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="downloadDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Downloads
                    </a>
                    <div class="dropdown-menu" arialabelledby="downloadDropdown">
                        <a class="dropdown-item" href="./">
                            Mediafire
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rankingDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ranking
                    </a>
                    <div class="dropdown-menu" arialabelledby="rankingDropdown">
                        <a class="dropdown-item" href="./players">
                            Players
                        </a>
                        <a class="dropdown-item" href="./cities">
                            Cidades
                        </a>
                    </div>
                </li>
            </ul>
            <div class="text-center">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>
                        <?php if (!isset($_SESSION['login'])) : ?>
                            <div class="dropdown-menu" style="float:left;margin-left:-7em;" arialabelledby="userDropdown">
                                <a class="dropdown-item" href="./login">
                                    Login
                                </a>
                                <a class="dropdown-item" href="./register">
                                    Registrar
                                </a>
                            </div>
                        <?php else : ?>
                            <div class="dropdown-menu" style="float:left;margin-left:-7em;" arialabelledby="userDropdown">
                                <a class="dropdown-item" href="./dashboard">
                                    Dashboard
                                </a>
                                <a class="dropdown-item" href="./logout">
                                    Logout
                                </a>
                            </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </navbar>
</div>