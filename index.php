<?php

require 'functions.php';

require 'router.php';

// dd($result);


// $dsn = "mysql:host=localhost;port=8000;dbname=notes_db;charset=utf8mb4";

// $pdo = new PDO($dsn, 'root');

// $statement = $pdo->prepare("SELECT * FROM notes");

// $statement->execute();

// $notes = $statement->fetchAll();

// dd($notes);

//invoca la funzione che manda al controller che manda alla vista
routeToController($uri, $routes);