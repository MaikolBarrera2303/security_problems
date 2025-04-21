<?php
session_start();

echo"<pre>";print_r($_SESSION["user"]);

$folder = __DIR__;

$files = scandir($folder);

foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $root = $folder . "/" . $file;
        if (is_file($root)) {
            if (unlink($root))
                echo "Archivo borrado: " . $root . "<br>";
            else
                echo "Error al borrar el archivo: " . $root . "<br>";
        }
    }
}

echo "Archivos eliminados";
