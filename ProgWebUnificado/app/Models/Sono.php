<?php

namespace App\Models;

use Carbon\Carbon;

class Sono
{
    public function __construct(
        public string $nome,
        public string $nascimento,
        public float $horas
    ) {}

    public function idade()
    {
        return Carbon::parse($this->nascimento)->age;
    }

    public function qualidade()
    {
        $idade = $this->idade();
        return match (true) {
            $idade < 5  => $this->horas >= 10 ? 'Bom' : 'Insuficiente',
            $idade < 13 => $this->horas >= 9  ? 'Bom' : 'Insuficiente',
            $idade < 18 => $this->horas >= 8  ? 'Bom' : 'Insuficiente',
            $idade < 60 => $this->horas >= 7  ? 'Bom' : 'Insuficiente',
            default     => $this->horas >= 7  ? 'Bom' : 'Insuficiente',
        };
    }
}

