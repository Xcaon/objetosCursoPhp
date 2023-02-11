<?php

class UsuarioController {
    
    // Metodo para mostrar todos los usuarios
    public function mostrarTodos(){
        // Esto es como si pidiera a la base de datos la infroamcion
        require 'models/usuario.php';

        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos();

        // Requiero ejecutar este fichero y le mando a imprimir todo
        require_once 'views/usuarios/mostrar-todos.php';
    }

}

?>