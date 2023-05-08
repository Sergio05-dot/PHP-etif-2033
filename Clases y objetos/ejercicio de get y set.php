<?php 
//Creamos la clase Profesor
    class Profesor {
        //PROPIEDADES del objeto
        //ATRIBUTOS
        private $nombre;
        private $materia;
        //MÉTODOS
        //Getters y Setters
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getMateria() {
            return $this->materia;
        }
        public function setMateria($materia) {
            $this->materia = $materia;
        }
    }
    
    $p1 = new Profesor();
    //echo $p1->nombre; //No se puede porque los atributos son privados
    $p1->setNombre("Juan");
    echo $p1->getNombre(); // Imprime "Juan"
    $p1->setMateria(" Matematicas");
    echo $p1->getMateria();

    $p2 = new Profesor();
    $p2->setNombre(" <br>Pedro");
    echo $p2->getNombre(); // Imprime "Pedro"
    $p2->setMateria(" Castellano");
    echo $p2->getMateria();

    $p3 = new Profesor();
    $p3->setNombre(" <br>Manolo");
    echo $p3->getNombre(); // Imprime "Manolo"
    $p3->setMateria(" Catalan");
    echo $p3->getMateria();

?>