<?php 
//Definisco il db
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

// Verifica se i dati sono stati inviati tramite POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $body = $conn->real_escape_string($_POST['body']);

    // Query di inserimento
    $sqlInsert = "INSERT INTO notes (name, body) VALUES ('$name', '$body')";

}

require 'views/note.view.php';
