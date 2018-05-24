<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 09/04/2018
 * Time: 18:44
 */
declare(strict_types=1); //permite colcoar o tipo de dado no parametro dos metodos

namespace SONFin;
use Pimple\Tests\Fixtures\Service;
use SONFin\Plugins\PluginsInteface;

class Application
{
    private $serviceContainer;

    public function __Construct(ServiceContainer $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function service($name){
        return $this->serviceContainer->get($name);
    }

    public function addService(string $name, $service): void
    {
        if (is_callable($service)) {
            $this->serviceContainer->addLazy($name, $service);
        } else {
            $this->serviceContainer->add($name, $service);
        }
    }

    public function plugin(PluginsInteface $plugin): void
    {
        $plugin->register($this->serviceContainer);
    }

    public function get($path, $action, $name){
        $routing = $this->service('routing');
        $routing->get($name, $path, $action);
        return $this;
    }

    public function start(){
        $route = $this->service('route');
        $callable = $route->handler;
        $callable();
    }
}