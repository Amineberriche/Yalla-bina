<?php

namespace ContainerZXWP8Ra;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LbwTLZKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LbwTLZK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LbwTLZK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'traget' => ['privates', '.errored..service_locator.LbwTLZK.App\\Entity\\Traget', NULL, 'Cannot autowire service ".service_locator.LbwTLZK": it references class "App\\Entity\\Traget" but no such service exists.'],
            'tragetRepository' => ['privates', 'App\\Repository\\TragetRepository', 'getTragetRepositoryService', true],
        ], [
            'traget' => 'App\\Entity\\Traget',
            'tragetRepository' => 'App\\Repository\\TragetRepository',
        ]);
    }
}