<?php

namespace App\Models;

use Carbon\Carbon;

class Pessoa
{
    public function __construct(
        public string $nome,
        public string $nascimento,
        public float $peso,
        public float $altura
    ) {}

    public function idade()
    {
        return Carbon::parse($this->nascimento)->age;
    }

    public function imc()
    {
        return round($this->peso / ($this->altura ** 2));
    }

    public function classificacaoImc()
    {
        return match (true) {
            $this->imc() < 18.5 => 'Abaixo do peso',
            $this->imc() < 25   => 'Peso Normal',
            $this->imc() < 30   => 'Sobrepeso',
            $this->imc() < 35   => 'Obesidade I',
            $this->imc() < 40   => 'Obesidade II',
            default             => 'Obesidade III (mórbida)',
        };
    }
}

