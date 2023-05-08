<?php 
//Creamos la clase Profesor
    class Profesor {
        //Propiedades del objeto

        //Atributos 
        public $nombre = 'Marc';
        public $apellido = 'Esteve';
        public $altura = 1.75;

        public $materia = "Programador back-end";

        // echo $nombre; no funciona

        //Métodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
    $persona = new Profesor();//Creamos OBJETO
    // echo gettype($persona); //Muestra tipo "object"
    echo 'El nombre del profesor es ' . $persona->nombre . ' ' . $persona->apellido . " con una altura de " . $persona->altura . 'm' . " que imparte Clases de " . $persona->materia;
    $persona->hablar("<br>Un cordial saludo");

    

?>