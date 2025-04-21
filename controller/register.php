<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "security_problems";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (user, password, email) VALUES ('$user', '$password', '$email')";

if ($conn->multi_query($sql) === TRUE) echo "Registro exitoso";

else echo "Error: " . $sql . "<br>" . $conn->error;
