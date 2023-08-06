<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    require_once base_path("Core/{$class}.php");
});

require_once base_path('router.php');




