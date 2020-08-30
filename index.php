<?php
DEFINE('LOCAL', true);
session_start();

if (isset($_GET['logout'], $_SESSION['login'])) {
    unset($_SESSION['login'], $_SESSION['time']);
    $_SESSION['logout'] = 0;
}

$_GET['pages'] = $_GET['pages'] ?? 'home';
require_once('app/config/config.php');
require_once('app/models/db.php');
require_once('app/controllers/pages.php');
require_once('app/controllers/message.php');
require_once('app/controllers/params.php');
require_once('app/models/' . PageController::getUri() . '.php');
require_once('app/controllers/' . PageController::getUri() . '.php');
$ref = new ReflectionClass(ucwords(PageController::getUri()) . 'Controller');
$class = $ref->newInstance();

?>
<!doctype html>
<html lang="pt-BR">
<?php require_once('app/views/layouts/head.php'); ?>
<?php require_once('app/views/layouts/body.php'); ?>
<?php require_once('app/views/layouts/footer.php'); ?>

</html>