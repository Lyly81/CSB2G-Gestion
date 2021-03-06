<?php

namespace ContainerDmHvgcp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1jUMKFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1j_UMKF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1j_UMKF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BookingController::show' => ['privates', '.service_locator.9oADI1K', 'get_ServiceLocator_9oADI1KService', true],
            'App\\Controller\\DocumentController::show' => ['privates', '.service_locator.A083O2G', 'get_ServiceLocator_A083O2GService', true],
            'App\\Controller\\TransferController::show' => ['privates', '.service_locator.UL95tzc', 'get_ServiceLocator_UL95tzcService', true],
            'App\\Controller\\UserController::login' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\BookingController:show' => ['privates', '.service_locator.9oADI1K', 'get_ServiceLocator_9oADI1KService', true],
            'App\\Controller\\DocumentController:show' => ['privates', '.service_locator.A083O2G', 'get_ServiceLocator_A083O2GService', true],
            'App\\Controller\\TransferController:show' => ['privates', '.service_locator.UL95tzc', 'get_ServiceLocator_UL95tzcService', true],
            'App\\Controller\\UserController:login' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\BookingController::show' => '?',
            'App\\Controller\\DocumentController::show' => '?',
            'App\\Controller\\TransferController::show' => '?',
            'App\\Controller\\UserController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BookingController:show' => '?',
            'App\\Controller\\DocumentController:show' => '?',
            'App\\Controller\\TransferController:show' => '?',
            'App\\Controller\\UserController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
