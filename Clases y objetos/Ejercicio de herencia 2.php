<?php
class Vehiculo {
  protected $marca;
  protected $modelo;
  protected $anio;

  public function __construct($marca, $modelo, $anio) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->anio = $anio;
  }

  

  public function getInfo() {
    return "Marca: $this->marca, Modelo: $this->modelo, Año: $this->anio";
  }
}

class Opel extends Vehiculo {
  public function __construct($modelo, $anio) {
    parent::__construct('Opel', $modelo, $anio);
  }
}

class BMW extends Vehiculo {
  public function __construct($modelo, $anio) {
    parent::__construct('BMW', $modelo, $anio);
  }
}

// Ejemplo de uso
$vehiculo1 = new Opel('Corsa', 2022);
$vehiculo2 = new BMW('Serie 3', 2022);

echo $vehiculo1->getInfo() . "\n";
echo $vehiculo2->getInfo() . "\n";
?>