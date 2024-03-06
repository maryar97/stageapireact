<?php

namespace ContainerCP5Wa34;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ApiPlatform\Symfony\Messenger\Processor' shared service.
     *
     * @return \ApiPlatform\Symfony\Messenger\Processor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Messenger/DispatchTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Messenger/Processor.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['ApiPlatform\\Symfony\\Messenger\\Processor'])) {
            return $container->privates['ApiPlatform\\Symfony\\Messenger\\Processor'];
        }

        return $container->privates['ApiPlatform\\Symfony\\Messenger\\Processor'] = new \ApiPlatform\Symfony\Messenger\Processor($a);
    }
}
