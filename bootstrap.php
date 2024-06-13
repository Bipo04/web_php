<?php
$web_root = "http://" . $_SERVER['HTTP_HOST']."/web_temp";
define('_WEB_ROOT', $web_root);
require_once "./mvc/core/App.php";
require_once "./mvc/core/Controller.php";
require_once "./mvc/core/Db.php";
require_once "./mvc/core/Request.php";
?>