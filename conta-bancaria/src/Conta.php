<?php

class Conta
{
    public function __construct(
        private int $saldoEmCentavos,
        private string $nomeTitular,
        private string $numeroConta
    ){
        $this->saldoEmCentavos = $saldoEmCentavos;
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
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

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}