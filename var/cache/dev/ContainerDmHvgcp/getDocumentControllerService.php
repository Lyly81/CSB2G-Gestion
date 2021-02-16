<?php

namespace ContainerDmHvgcp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DocumentController' shared autowired service.
     *
     * @return \App\Controller\DocumentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\DocumentController.php';

        $container->services['App\\Controller\\DocumentController'] = $instance = new \App\Controller\DocumentController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\DocumentController', $container));

        return $instance;
    }
}
