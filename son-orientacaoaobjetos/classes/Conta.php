<?php
abstract class Conta
{
    public $Agencia;
    public $Codigo;
    public $DataDeCiacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Valor,$Cancelada)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCiacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;

        $this->Depositar($Valor);
        $this->Cancelada = false;
    }

    function __destruct()
    {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} Finalizada...</br>\n";
    }

    public function Retirar($valor)
    {
        $this->Saldo -= $valor;
    }

    public function Depositar($valor)
    {
        if($valor > 0){
            $this->Saldo += $valor;
            echo "Deposito Realizado com Sucesso !".$this->Titular."seu saldo atual e".$this->Saldo;
        }
    }

    public function VerSaldo()
    {
        echo "Seu Saldo atual e:".$this->Saldo;
    }

    abstract function Transferir($conta, $valor);

}