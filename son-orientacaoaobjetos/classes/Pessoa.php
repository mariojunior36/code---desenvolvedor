<?php
class Pessoa
{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    public function __construct($Codigo,$Nome,$Altura,$Idade,$Nascimento,$Escolaridade,$Salario)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    function __destruct()
    {
     echo "objeto {$this->Nome} finalizado..<br>\n";
    }

    public function Crescer($centimetros)
    {
        if($centimetros > 0 ){
            $this->Altura += $centimetros;
        }
    }

    public function Formar($titulacao)
    {
        if($titulacao){
            $this->Escolaridade = $titulacao;
        }

    }

    public function Envelhecer($anos)
    {
        if($anos > 0){
            $this->Idade += $anos;
        }
    }
}