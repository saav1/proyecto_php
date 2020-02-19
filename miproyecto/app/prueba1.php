<?php
namespace App;

class prueba1  
{

    private $nombre = "David";

    function __constructor( $nombre = "stalyn"){

        $this->nombre = $nombre;

    }

    public function getNombre(){
        echo $this->nombre;
    }

    public function toString(){
        echo "User: $this->nombre\n";
    }
}