<?php

// Requiero el fichero php
require_once 'controllers/usuario.php';

// Instancio la clase
$controlador = new Usuario();

// Ejecuto su metodo
$controlador->mostrarTodos();

?>