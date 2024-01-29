<?php
$uri = $_SERVER['REQUEST_URI'];
$routes = [
    "/"=> 'pages/course.php',
    "/dashboard" => "pages/dashboard.php",
    "/login" => "pages/login.php",
    "/glossaires" => "pages/glossaires.php",
    "/edit" => "pages/edit.php",
];
if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    http_response_code(404);

    echo "Sorry, page not found";

    die();
}