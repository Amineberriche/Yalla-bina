<?php

namespace ContainerAkxxL4S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2dc0eaXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2dc0eaX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2dc0eaX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'responseParameters' => ['privates', '.errored..service_locator.2dc0eaX.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.2dc0eaX": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'responseParameters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }
}
