<?php

namespace ContainerBggo9GL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\LOGIN\LoginController' shared autowired service.
     *
     * @return \App\Controller\LOGIN\LoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LOGIN/LoginController.php';

        $container->services['App\\Controller\\LOGIN\\LoginController'] = $instance = new \App\Controller\LOGIN\LoginController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\LOGIN\\LoginController', $container));

        return $instance;
    }
}
