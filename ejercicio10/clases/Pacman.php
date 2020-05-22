<?php


class Pacman {

    private $vidas;
    private $puntos;

    public function __construct() {
        $this->vidas = 3;
        $this->puntos = 0;
    }

    public function chocaContra($elemento){
        $elemento->meChoca($this);
    }

    public function restoVida(){
        $this->vidas--;
        if($this->vidas <= 0){
            throw new Exception("Te quedaste sin vidas para jugar");
        }
    }

    public function suma10Puntos(){
        $this->puntos += 10;
    }

    public function suma100Puntos(){
        $this->puntos+=100;
    }



    /**
     * @return int
     */
    public function getVidas() {
        return $this->vidas;
    }

    /**
     * @return int
     */
    public function getPuntos() {
        return $this->puntos;
    }
}