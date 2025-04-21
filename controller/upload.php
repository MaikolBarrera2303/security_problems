<?php

$directory = "../public/files/";
$root = $directory.basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $root))
    echo "El Archivo ".basename($_FILES["file"]["name"]). " ha sido subido.";

else echo "Error subiendo el archivo";


