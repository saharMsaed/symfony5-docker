<?php

namespace ContainerEYDdg6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_Client_CookiejarService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'browser-kit'.\DIRECTORY_SEPARATOR.'CookieJar.php';

        $container->factories['service_container']['test.client.cookiejar'] = function () use ($container) {
            return new \Symfony\Component\BrowserKit\CookieJar();
        };

        return $container->factories['service_container']['test.client.cookiejar']();
    }
}
