<?php
class Piedra{

    private $mano = "Piedra";
    private $nombreJugador;

    public function __construct($nombreJugador){
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro){
        return $otro->teCompitePiedra($this);
    }

    private function teCompitePiedra($otro){
        return new Empate;
    }

    public function teCompitePapel($otro){
        return $otro;
    }

    public function teCompiteTijera($otro){
        return $this;
    }

    public function ganador(){
        return $this->nombreJugador;
    }

    public function getMano(){
        return $this->mano;
    }
}