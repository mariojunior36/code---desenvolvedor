<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 09/04/2018
 * Time: 19:14
 */
declare(strict_types=1);
namespace SONFin\Plugins;
use Aura\Router\RouterContainer;
use MongoDB\Driver\ReadConcern;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use SONFin\ServiceContainerInterface;
use Zend\Diactoros\ServerRequestFactory;

class RoutePlugin implements PluginsInteface
{
    public function register(ServiceContainerInterface $container)
    {
        $routecontainer = new RouterContainer();

        /**
         * registra as rotas da aplicação
         */
        $map = $routecontainer->getMap();

        /**
         * identifica a rota que esta sendo acessada
         */
        $matcher = $routecontainer->getMatcher();
        /**
         * gera liks com base nas rotas registradas
         */
        $generator = $routecontainer->getGenerator();


        $container->add('router',$map);
        $container->add('route.matcher',$matcher);
        $container->add('routing.generator', $generator);
        $container->add(RequestInterface::class, $request);

        $container->addLazy('route',function (ContainerInterface $container){
            $matcher = $container->get('routing.matcher');
            $request = $container->get(RequestInterface::class);
            $matcher->match($request);
            return $matcher->match($request);
        });
    }

    protected function getRequest(): RequestInterface
    {
        return ServerRequestFactory::fromGlobals(
            $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
        );
    }
}