<?php

namespace ContainerMJhHyNv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PtNJgDkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ptNJgDk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ptNJgDk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userData' => ['privates', '.errored..service_locator.ptNJgDk.App\\Entity\\UserDataSQL', NULL, 'Cannot autowire service ".service_locator.ptNJgDk": it needs an instance of "App\\Entity\\UserDataSQL" but this type has been excluded in "config/services.yaml".'],
        ], [
            'userData' => 'App\\Entity\\UserDataSQL',
        ]);
    }
}
