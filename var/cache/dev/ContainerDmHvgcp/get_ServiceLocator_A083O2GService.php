<?php

namespace ContainerDmHvgcp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A083O2GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A083O2G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A083O2G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\DocumentRepository', 'getDocumentRepositoryService', true],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\DocumentRepository',
        ]);
    }
}
