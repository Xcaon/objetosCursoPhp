<?php



class Usuario{

    public $usuario;
    public $apellidos;
    public $email;
    public $password;


    function getUsuario(){
        return $this->usuario;
    }

    function getApellidos(){
        return $this->apellidos;
    }


    function getEmail(){
        return $this->email;
    }


    function getPassword(){
        return $this->password;
    }




}

?>