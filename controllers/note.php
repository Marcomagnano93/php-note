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

require 'views/note.view.php';
