<?php

class Provincia {
    private $nombreProvi;
    private $numCiudades;

    public function __construct(string $nombre, int $numCiudades) {
        $this->nombreProvi = $nombre;
        $this->numCiudades = $numCiudades;
    }

    public function getNombreProvi(){
        return $this->nombreProvi;
    }

    public function getNumCiudades(){
        return $this->numCiudades;
    }
}

?>
