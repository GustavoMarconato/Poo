<?php

namespace App;

class Mochila
{
    public function __construct(
        private float $capacidade,
        private float $pesoOcupado = 0,
    ){}

    public function adicionarPeso(float $peso): bool{
        if ($peso <= 0){
             return false;
        }

        if ($this->pesoOcupado + $peso > $this->capacidade){
            return false;
        }

        $this->pesoOcupado += $peso;

        return true;
    }

    public function getPesoOcupado(): float{
        return $this->pesoOcupado;
    }

    public function getCapacidade(): float{
        return $this->capacidade;
    }
}
?>