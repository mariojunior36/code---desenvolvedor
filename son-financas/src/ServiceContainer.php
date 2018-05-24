<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 03/04/2018
 * Time: 21:40
 */

namespace SONFin;


use Xtreamwayz\Pimple\Container;

class ServiceContainer implements ServiceContainerInterface
{
    private $container;

    public function __construct()
    {
        $this->container = new Container();
    }

    /**
     *recebe um nome do tipo string e um servico e um servico;
     */
    public function add(string $name, $service)
    {
        $this->container[$name] = $service;
    }

    /**
     *recebe um nome do tipo string e um servico;
     */
    public function addLazy(string $name, callable $callable)
    {
        $this->container[$name] = $this->container->factory($callable);
    }

    /**
     *recebe um nome do tipo string de servico e retorna um servico;
     * @return service
     */
    public function get(string $name)
    {
       return $this->container->get($name);
    }

    /**
     *recebe um nome do tipo string de um servico vefica se o servico existe;
     * @return boolean
     */
    public function has(string $name)
    {
        return $this->container->has($name);
    }
}