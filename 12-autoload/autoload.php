<?php

function autocargar_clases($class){
    include 'clases/' . $class . '.php';
}

// Este metodo utiliza esta función
spl_autoload_register('autocargar_clases');

?>