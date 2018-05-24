<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 09/04/2018
 * Time: 18:55
 */

namespace SONFin\Plugins;


use SONFin\ServiceContainer;
use SONFin\ServiceContainerInterface;

interface PluginsInteface
{
    public function register(ServiceContainerInterface $container);


}