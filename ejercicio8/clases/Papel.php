<?php
class Papel{

    private $mano = "Papel";
    private $nombreJugador;

    public function __construct($nombreJugador){
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro){
        return $otro->teCompitePapel($this);
    }

    public function teCompitePiedra($otro){
        return $this;
    }

    public function teCompitePapel($otro){
        return new Empate;
    }

    public function teCompiteTijera($otro){
        return $otro;
    }

    public function ganador(){
        return $this->nombreJugador;
    }

    public function getMano(){
        return $this->mano;
    }
}
