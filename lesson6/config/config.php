<?php
define('ROOT', dirname(__DIR__));
define('TEMPLATES_DIR', ROOT . '/templates/');
define('LAYOUTS_DIR', 'layouts/');


define('HOST', 'localhost:8889');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'test');

include ROOT . "/engine/db.php";
include ROOT . "/engine/catalog.php";
include ROOT . "/engine/function.php";
include ROOT . "/engine/galery.php";
