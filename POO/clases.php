<?php
    class Persona {
        private $dni;
        private $nombre;
        private $email;
        
        public function __construct($dni, $nombre, $email){
            $this->__set_dni($dni);
            $this->__set_nombre($nombre);
            $this->__set_email($email);
        }

        public function __set_dni($dni){
            $this->dni = $dni;
        }
        
        private function __set_nombre($nombre){
            $this->nombre = $nombre;
        }
        
        private function __set_email($email){
            $this->email = $email;
        }

        public function __get_dni(){
            return $this->dni;
        }

        public function __get_nombre(){
            return $this->nombre;
        }

        public function __get_email(){
            return $this->email;
        }

        public function __toString(){
            return "DNI: " . $this->__get_dni() . " - Nombre: " . $this->__get_nombre() . " - Email: " . $this->__get_email();
        }
    }
    class Estudiante extends Persona {
        private $numExpediente;
        
        public function __construct($dni, $nombre, $email, $numExpediente){
            parent::__construct($dni, $nombre, $email);
            $this->__set_numExpediente($numExpediente);
        }

        private function __set_numExpediente($numExpediente){
            $this->numExpediente = $numExpediente;
        }

        public function __get_numExpediente(){
            return $this->numExpediente;
        }

        public function __toString(){
            return parent::__toString() . " - Numero de expediente: " . $this->__get_numExpediente();
        }
    }

    $persona = new Persona("12345678L", "Iván", "ivadelser@alu.edu.gva.es");
    $estudiante = new Estudiante("87654321L", "Emilio", "emimelano@alu.edu.gva.es", 20);
    $estudiante->__set_dni("73241284L");
    echo "<h1>Función mostrar de la clase Persona</h1>" . $persona;
    echo "<h1>Función mostrar de la clase Estudiante</h1>" . $estudiante;
?>