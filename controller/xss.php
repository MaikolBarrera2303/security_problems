<?php
if (isset($_POST['message']))
{
    $message = $_POST['message'];
    echo "<p>Tu mensaje fue: " . $message . "</p>";
}
else
    echo "<p>No se recibió ningún mensaje.</p>";

echo "<p><a href='../view/xss.html'>Volver al formulario</a></p>";

