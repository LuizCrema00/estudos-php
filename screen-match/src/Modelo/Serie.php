<?php

namespace ScreenMatch\Modelo;

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public int $temporadas,
        public int $episodiosPorTemporada,
        public int $minutosPorEpisodio
    )
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;
    }

}