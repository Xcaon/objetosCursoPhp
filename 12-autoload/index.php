<?php

require_once 'autoload.php';

// Crea un objeto
$usuario = new Usuario();
echo $usuario->nombre;

echo("hola");


// Comprobar si existe una clase
$clase = class_exists('polla');
if ($clase){
    echo "<h1>La clase si existe";
} else {
    echo "<h1>La clase si existe";
}

?> 