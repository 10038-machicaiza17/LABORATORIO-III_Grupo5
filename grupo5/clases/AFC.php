<?php

require_once("Continente.php");
require_once("Organizacion.php");
require_once("Ciudad.php"); // Agregar las clases necesarias


class AFC extends Continente implements Organizacion {
    private $sello;
    private $numPais;

    // Atributos específicos de la organización
    private Continentes $lugar;
    private Ciudad $sede;
    private ONG $tipo;

    public function __construct($nombreConti, $maxPaises, $sello, $numPais, Continentes $lugar, Ciudad $sede, ONG $tipo) {
        parent::__construct($nombreConti, $maxPaises);
        $this->sello = $sello;
        $this->numPais = $numPais;
        $this->lugar = $lugar;
        $this->sede = $sede;
        $this->tipo = $tipo;
    }

    public function afiliacion() {
        // Implementar lógica de afiliación
    }

    // public function imprimir(){
    //     echo "<h1>Confederacion AFC: {$this->nombreConti}</h1>";
    //     echo "<table border='1'>
    //             <tr>
    //                 <th>Sello</th>
    //                 <th>Número de Países</th>
    //                 <th>Lugar</th>
    //                 <th>Sede</th>
    //                 <th>ONG</th>
    //             </tr>";
        
    //     echo "<tr>";
    //     echo "<td><img src='{$this->sello}' alt='Sello'></td>";
    //     echo "<td>{$this->numPais}</td>";
    //     echo "<td>{$this->getLugarNombre($this->lugar)}</td>";
    //     echo "<td>{$this->sede->getNombreCiudad()} (Codigo postal: {$this->sede->getCodigoPostal()})</td>";
    //     echo "<td>{$this->getTipoNombre($this->tipo)}</td>";
    //     echo "</tr>";

    //     echo "</table>";
    // }

    public function imprimir() {
        echo "<h1>Información de la Confederación AFC</h1>";

        echo "<ul>";
        echo "<li>Continente: {$this->nombreConti}</li>";
        echo "<li>Sello: <img src='{$this->sello}' alt='Sello'></li>";
        echo "<li>Número máximo de Países: {$this->maxPaises}</li>";
        echo "<li>Número de Países Asociados: {$this->numPais}</li>";
        echo "<li>Lugar: {$this->getLugarNombre($this->lugar)}</li>";
        echo "<li>Sede: {$this->sede->getNombreCiudad()} (Código postal: {$this->sede->getCodigoPostal()})</li>";
        echo "<li>ONG: {$this->getTipoNombre($this->tipo)}</li>";
        echo "</ul>";
    }

    private function getLugarNombre($lugar) {
        switch ($lugar) {
            case Continentes::OCEANIA:
                return "Oceanía";
            case Continentes::EUROPA:
                return "Europa";
            case Continentes::AFRICA:
                return "África";
            case Continentes::ASIA:
                return "Asia";
            case Continentes::AMERICA_SUR:
                return "América del Sur";
            case Continentes::AMERICA_NORTE_Y_CENTRO:
                return "América del Norte y Central";
            default:
                return "Desconocido";
        }
    }


    private function getTipoNombre($tipo) {
        switch ($tipo) {
            case ONG::FIFA:
                return "FIFA";
            case ONG::G8:
                return "G8";
            case ONG::BRICS:
                return "BRICS";
            case ONG::OTAN:
                return "OTAN";
            default:
                return "Desconocido";
        }
    }
    public function imprimirTabla() {
        $xml = simplexml_load_file("../xml/afc.xml");
        $html = <<<html
        <div class="table-responsive custom-table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope='col'>Campo</th>
                        <th scope='col'>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Continente</td><td>{$this->nombreConti}</td></tr>
                    <tr><td>Sello</td><td><img src='{$this->sello}' alt='Sello' style='max-width: 150px;'></td></tr>
                    <tr><td>Número máximo de Países</td><td>{$this->maxPaises}</td></tr>
                    <tr><td>Número de Países Asociados</td><td>{$this->numPais}</td></tr>
                    <tr><td>Lugar</td><td>{$this->getLugarNombre($this->lugar)}</td></tr>
                    <tr><td>Sede</td><td>{$this->sede->getNombreCiudad()} (Código postal: {$this->sede->getCodigoPostal()})</td></tr>
                    <tr><td>ONG</td><td>{$this->getTipoNombre($this->tipo)}</td></tr>
                    <tr>
                        <td>Paises</td>
                        <td>
                            <ol>
        html;
                                foreach ($xml->Confederacion->Continente->Pais as $pais) {
                                    $html .= "<li><a href='paises/{$pais['nombre']}.php?nombre={$pais['nombre']}'>{$pais['nombre']}</a></li>";
                                }
        $html .= <<<html
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        html;

        // Imprimir el contenido HTML generado
        echo $html;
    }
    
}

?>