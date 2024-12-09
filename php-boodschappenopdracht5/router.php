<?php 
$CurrentPage = parse_url($_SERVER['REQUEST_URI'])['path'];




require "routes.php";

// if (array_key_exists($CurrentPage, $routes)) {
//     require $routes[$CurrentPage];
// } else {
//     abort()
// }

 function abort() {
    require "views/404.php";
    die();
 }




function routeToController ($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($CurrentPage, $routes);