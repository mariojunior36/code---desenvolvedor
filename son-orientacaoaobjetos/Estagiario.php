<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 22/04/2018
 * Time: 10:16
 */

class Estagiario extends Funcionario
{
    function getSalario()
    {
        return $this->Salario * 1.12;
    }

}