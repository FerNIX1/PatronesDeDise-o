<?php
include_once "Personaje.php";

class Esqueleto implements Personaje {
    private $ataque;
    private $velocidad;
    private $mensaje;

    public function __construct() {
        $this->ataque = 10;
        $this->velocidad = 20;
        $this->mensaje = "Felicidades tienes un esqueleto";
    }

    public function CrearPersonaje() {
        return new Esqueleto();
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
