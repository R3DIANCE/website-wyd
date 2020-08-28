<?php
    DEFINE('LOCAL', true);
    session_start();
    $_GET['pages'] = $_GET['pages'] ?? 'home';
    require_once('app/config/config.php');
    require_once('app/models/db.php');
    require_once('app/controllers/pages.php');
    require_once('app/controllers/'.PageController::getUri().'.php');
    $ref = new ReflectionClass(ucwords($_GET['pages']).'Controller');
    $class = $ref->newInstance();
    $class->setParams();
?>
<!doctype html>
<html lang="pt-BR">
<?php require_once('app/views/layouts/head.php'); ?>
<?php require_once('app/views/layouts/body.php'); ?>
<?php require_once('app/views/layouts/footer.php'); ?>
</html>