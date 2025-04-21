<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "security_problems";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$user = $_POST['user'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE user = '$user' AND password = '$password'");

if ($result->num_rows > 0)
{
    $_SESSION["user"] = $result->fetch_assoc();
    echo "El usuario ".$user." ha sido iniciado session con exito.";
}
else echo "Usuario o contraseña incorrectos";
