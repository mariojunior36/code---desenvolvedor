<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 17/04/2018
 * Time: 21:18
 */

final class ContaPoupanca extends Conta
{
    public $Aniversario;
    public function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Valor, $Cancelada, $Aniversario)
    {
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Valor, $Cancelada);
        $this->Aniversario = $Aniversario;
    }

    function Retirar($quantidade)
    {
        if($this->Saldo >= $quantidade){
            parent::Retirar($quantidade);
        }else{
            echo "saque nao permitido pela instituicao";
        }
    }

    public function Transferir($conta, $valor)
    {
        // TODO: Implement Transferir() method.
    }
}