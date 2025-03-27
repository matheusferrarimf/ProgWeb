<?php

namespace App\Models;

class Viagem
{
    public function __construct(
        public string $combustivel,
        public float $valorLitro,
        public float $distancia,
        public float $consumo
    ) {}

    public function litrosNecessarios()
    {
        return $this->distancia / $this->consumo;
    }

    public function custoTotal()
    {
        return $this->litrosNecessarios() * $this->valorLitro;
    }
}
