<?php

namespace ContainerBggo9GL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JcVNdVQService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.jcVNdVQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jcVNdVQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidate' => ['privates', '.errored..service_locator.jcVNdVQ.App\\Entity\\Candidate', NULL, 'Cannot autowire service ".service_locator.jcVNdVQ": it references class "App\\Entity\\Candidate" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'candidate' => 'App\\Entity\\Candidate',
            'entityManager' => '?',
        ]);
    }
}
