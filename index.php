<?php

session_start();
require_once ('config.php');

$module = _MODULE;
$action = _ACTION;

if (!empty ($_GET['modules'])) {
    if (is_string($_GET['modules'])) {
        $module = trim($_GET['modules']);
    }
}

if (!empty ($_GET['action'])) {
    if (is_string($_GET['action'])) {
        $action = trim($_GET['action']);
    }
}

$path = 'modules/' . $module . '/' . $action . '.php';
if (file_exists($path)) {
    require_once ($path);
} else {
    require_once ('modules/error/404.php');
}