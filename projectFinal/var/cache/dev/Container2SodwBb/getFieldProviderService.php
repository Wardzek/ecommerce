<?php

namespace Container2SodwBb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Provider/FieldProvider.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
