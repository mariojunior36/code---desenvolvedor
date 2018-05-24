<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 17/04/2018
 * Time: 21:08
 */

final class ContaCorrente extends Conta
{
    public $Limite;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Valor, $Cancelada, $Limite)
    {
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Valor, $Cancelada);
        $this->Limite = $Limite;
    }

    function Retirar($valor)
    {
        $cpmf = 0.05;
        if($this->Saldo + $this->Limite >= $valor) {
            parent::Retirar($valor);
            parent::Retirar($valor * $cpmf);
        }else{
            echo "Retirada não Permitida...\n";
        }
        return false;
    }

    function TaxaTransferencia($taxa){

    }

    final public function Transferir($conta, $valor)
    {
        if($this->Retirar($valor)){
          $conta->Depositar($valor);
        }

        if($this->Titular != $conta->Titular){
            $this->Retirar($this->TaxaTransferencia());
        }
    }


}