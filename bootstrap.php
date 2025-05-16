<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    define('BASE_PATH', __DIR__);

    require_once BASE_PATH . 'utils/CatData.util.php';
    require_once BASE_PATH . '/components/templates/catcard.component.php';
    require_once BASE_PATH . '/components/header.component.php';