<?php

namespace ContainerF2yUKLa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DYwjo85Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.dYwjo85' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dYwjo85'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'consultantRepository' => ['privates', 'App\\Repository\\ConsultantRepository', 'getConsultantRepositoryService', true],
        ], [
            'consultantRepository' => 'App\\Repository\\ConsultantRepository',
        ]);
    }
}
