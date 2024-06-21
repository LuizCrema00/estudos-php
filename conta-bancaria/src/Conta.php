<?php

class Conta
{
    public function __construct(
        private int $saldoEmCentavos,
        public readonly string $nomeTitular,
        public readonly string $numeroConta
    ){
        $this->saldoEmCentavos = $saldoEmCentavos;
    }

    public function saque(int $saque)
    {
        if ($saque > $this->saldoEmCentavos) {
            return  "Voce nao possui fundos o suficiente para saque";
        }

        $this->saldoEmCentavos -= $saque;
        return "Saque realizado com sucesso"; 
    }

    public function deposito(int $deposito) 
    {
        if ($deposito < 0) {
            return 'Nao é possivel depositar valor negativo';
        }

        $this->saldoEmCentavos += $deposito;
        return "Depósito realizado com sucesso";
    }

}