<?php

class Usuario{

    public $nombre;
    public $email;


    public function __constructor(){
        $this->nombre = "Fernando Hanlon";
    }

    
function getNombre(){
    return $this->nombre;
}

}

?>