<?php

namespace ContainerLwiU5wD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R0oHHGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._r0oHHG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._r0oHHG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
        ], [
            'jobRepository' => 'App\\Repository\\JobRepository',
        ]);
    }
}
