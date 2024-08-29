<?php

const BASE_PATH = __DIR__ . "/../";
function dd($value):string {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}


function base_path($path):string {
    return BASE_PATH.$path;
}
function  abort($code):string {
    http_response_code($code);
    die();
}

function view($view, $data = []):string {
    extract($data);
    ob_start();
    include base_path("views/$view.php");
    return ob_get_clean();
}
