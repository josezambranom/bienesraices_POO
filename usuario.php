<?php

require 'includes/app.php';
$db = conectarDB();

// Crear email y password
$email = "correo@correo.com";
$password = "12345";

$passwordhash = password_hash($password, PASSWORD_BCRYPT);

// Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordhash}');"; 

echo $query;

// Agregarlo a la base de datos
mysqli_query($db, $query);

?>