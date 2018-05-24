<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 16/04/2018
 * Time: 20:44
 */

class Produto
{
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;
    public $Fornecedor;

    public function __construct($Codigo, $Descricao, $Preco, $Quantidade, $Fornecedor)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Preco = $Preco;
        $this->Quantidade = $Quantidade;
        $this->Fornecedor = $Fornecedor;
    }

    public function ImprimeEtiqueta(){
        echo "Codigo:".$this->Codigo."<br>\n";
        echo "Descrição:".$this->Descricao."<br>\n";
    }

}