<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//routes

$routes = [
    '/' => 'controllers/index.php',
    '/note' => 'controllers/note.php'
];

//router functions

//crea il collegamento da index.php alla pagina richiesta
function routeToController ($uri, $routes){
    //controlla se nell'array associativo delle routes esiste l'uri (indirizzio) come chiave
    if (array_key_exists($uri, $routes)){
    
    //se trova la chiave corrispondente all'indirizzo richiama il suo controller    
        require $routes[$uri];
    }
    else{
    //altrimenti pagina non trovata
        abort();
    }
}