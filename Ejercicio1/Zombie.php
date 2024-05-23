<?php
include_once "Personaje.php";

class Zombie implements Personaje {
    private $ataque;
    private $velocidad;
    private $mensaje;

    public function __construct() {
        $this->ataque = 20;
        $this->velocidad = 10;
        $this->mensaje = "Felicidades tienes un zombie";
    }

    public function CrearPersonaje() {
        return new Zombie();
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function getMensaje() {
        return $this->mensaje;
    }
}


?>