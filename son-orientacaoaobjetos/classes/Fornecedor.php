<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 22/04/2018
 * Time: 10:34
 */

class Fornecedor
{
    public $Codigo;
    public $RazaoSocial;
    public $Endereco;
    public $Cidade;

    public function __construct($Codigo, $RazaoSocial, $Endereco, $Cidade )
    {
        $this->Codigo = $Codigo;
        $this->RazaoSocial = $RazaoSocial;
        $this->Endereco = $Endereco;
        $this->Cidade = $Cidade;
    }
}