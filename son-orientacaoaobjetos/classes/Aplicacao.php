<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 22/04/2018
 * Time: 10:21
 */

class Aplicacao extends Biblioteca
{
    const Ambiente = "windows";
    const Versao = "10";

    public function __construct($nome)
    {
        echo parent::Nome . self::Ambiente . self::Versao . $nome;
    }


}