<?php
require_once(realpath(dirname(__FILE__)) . '/Provincia.php');

class Ciudad {
    private $nombreCiudad;
    private $codigoPostal;

    public function __construct(string $nombre, string $codigoPostal) {
        $this->nombreCiudad = $nombre;
        $this->codigoPostal = $codigoPostal;
    }

    public function getNombreCiudad() {
        return $this->nombreCiudad;
    }

    public function getCodigoPostal() {
        return $this->codigoPostal;
    }
}

?>
