<?php
class Pais {
    private $nombrePais;
    private $platotipico;
    private $moneda;
    private $bandera;

    public function __construct ($nombre, $plato, $moneda, $bandera) {
        $this->nombrePais = $nombre;
        $this->platotipico = $plato;
        $this->moneda = $moneda;
        $this->bandera = $bandera;
    }

    public function getNombrePais() {
        return $this->nombrePais;
    }
}

?>
