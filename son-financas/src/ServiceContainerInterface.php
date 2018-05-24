<?php
declare(strict_types=1); //permite colcoar o tipo de dado no parametro dos metodos
namespace SONFin;


interface ServiceContainerInterface
{
    /**
     *recebe um nome do tipo string e um servico e um servico;
     */
    public function add(string $name,$service);
    /**
     *recebe um nome do tipo string e um servico;
     */
    public function addLazy(string $name, callable $callable);
    /**
     *recebe um nome do tipo string e um servico e seleciona ele;
     */
    public function get(string $name);
    /**
     *recebe um nome do tipo string de um servico vefica se o servico existe;
     */
    public function has(string $name);
}