<?php
ob_start();
session_start();
include 'includes/db.php';
include 'includes/functions.php';

if (!$_SESSION['is_logged']) {
    header('Location: login.php');
}

include 'includes/header.php';

if (isset($params[0]) && file_exists($params[0] . '.php')) {
    include $params[0] . '.php';
} else {
    include 'home.php';
}

include 'includes/footer.php';