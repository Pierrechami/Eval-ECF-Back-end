<?php

namespace ContainerBggo9GL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4TTtHelService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.4TTtHel' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4TTtHel'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidateRepository' => ['privates', 'App\\Repository\\CandidateRepository', 'getCandidateRepositoryService', true],
        ], [
            'candidateRepository' => 'App\\Repository\\CandidateRepository',
        ]);
    }
}
