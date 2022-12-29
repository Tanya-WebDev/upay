<?php

namespace ContainerZ2p7UEu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_CacheWarmer_ExpressionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.cache_warmer.expression' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\CacheWarmer\ExpressionCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/CacheWarmer/ExpressionCacheWarmer.php';

        return $container->privates['security.cache_warmer.expression'] = new \Symfony\Bundle\SecurityBundle\CacheWarmer\ExpressionCacheWarmer(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.security.expression.2VveyHg'] ?? ($container->privates['.security.expression.2VveyHg'] = new \Symfony\Component\ExpressionLanguage\Expression('!is_authenticated()')));
        }, 1), ($container->privates['security.expression_language'] ?? $container->load('getSecurity_ExpressionLanguageService')));
    }
}
