<?php
            
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require_once 'routes.php';

function abort($code = 404) {
	http_response_code($code);
	require_once "views/{$code}.php";
	exit();
}

function routeToController($uri, $routes) {
	if (array_key_exists($uri, $routes)) {
		require_once $routes[$uri];
	} else {
		abort();
	}
}

routeToController($uri, $routes);