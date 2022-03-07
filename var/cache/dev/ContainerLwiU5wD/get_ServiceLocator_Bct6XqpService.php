<?php

namespace ContainerLwiU5wD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bct6XqpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bct6Xqp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bct6Xqp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'recruiterRepository' => ['privates', 'App\\Repository\\RecruiterRepository', 'getRecruiterRepositoryService', true],
        ], [
            'recruiterRepository' => 'App\\Repository\\RecruiterRepository',
        ]);
    }
}
