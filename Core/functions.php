<?php

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function base_path($url) {
    return BASE_PATH . $url;
}

function view($url, $attributes = []) {
    extract($attributes);
    require base_path("views/{$url}");
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(! $condition) {
        abort($status);
    }
}