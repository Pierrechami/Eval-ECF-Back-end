<?php

namespace ContainerF2yUKLa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\UserType' shared autowired service.
     *
     * @return \App\Form\UserType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserType.php';

        return $container->privates['App\\Form\\UserType'] = new \App\Form\UserType();
    }
}
