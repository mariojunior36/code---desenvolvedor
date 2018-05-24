<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 22/04/2018
 * Time: 10:10
 */

class Funcionario
{
    private $Codigo;
    public $Nome;
    private $Nascimento;
    protected $Salario;

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->Salario;
    }

    /**
     * @param mixed $Salario
     */
    public function setSalario($Salario)
    {
        if (is_numeric($Salario) and ($Salario > 0)) {
            $this->Salario = $Salario;
        }
    }
}