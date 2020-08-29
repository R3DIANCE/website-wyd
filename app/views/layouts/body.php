<?php if (!defined('LOCAL')) exit(); ?>
<?php require_once('app/views/layouts/navbar.php'); ?>
<?php
require_once('app/views/layouts/message.php');
require_once('app/views/'.PageController::getUri().'.php');
?>