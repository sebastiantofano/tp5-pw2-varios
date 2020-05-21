<?php
class Restar{

    private $operando1;
    private $operando2;

    public function __construct($operando1,$operando2) {
        $this->operando1 = $operando1->getValor();
        $this->operando2 = $operando2->getValor();
    }

    public function resolverEcuacion(){
        return $this->operando1 - $this->operando2;
    }
}