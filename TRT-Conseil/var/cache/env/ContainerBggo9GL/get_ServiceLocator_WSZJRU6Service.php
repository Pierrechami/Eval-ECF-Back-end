<?php

namespace ContainerBggo9GL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WSZJRU6Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.wSZJRU6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wSZJRU6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'jobRepository' => 'App\\Repository\\JobRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
