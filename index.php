<?php

require 'functions.php';

require 'router.php';



$servername = "localhost";
$username = "root";  // Username di default per phpMyAdmin in localhost
$password = "root";   
$dbname = "notes_db";  


// Creare la connessione
$conn = new mysqli($servername, $username, $password, $dbname);


// Scrivere la query SQL
$sql = "SELECT * FROM notes";

// Eseguire la query
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Output di ogni riga
    while($row = $result->fetch_assoc()) {
        echo "Nota: " . $row["name"]. " " . $row["body"]. "<br>";
    }
} else {
    echo "0 risultati";
}



// dd($result);


// $dsn = "mysql:host=localhost;port=8000;dbname=notes_db;charset=utf8mb4";

// $pdo = new PDO($dsn, 'root');

// $statement = $pdo->prepare("SELECT * FROM notes");

// $statement->execute();

// $notes = $statement->fetchAll();

// dd($notes);

//invoca la funzione che manda al controller che manda alla vista
routeToController($uri, $routes);