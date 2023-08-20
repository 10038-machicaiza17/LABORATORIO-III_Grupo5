<?php

abstract class Continente {
    protected $nombreConti;
    protected $maxPaises;

    public function __construct(string $nombre, int $maxPaises) {
        $this->nombreConti = $nombre;
        $this->maxPaises = $maxPaises;
    }

    abstract public function imprimir();
}

?>

