<?php

namespace ContainerZ2p7UEu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/Expression.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = ($container->privates['.security.expression.2VveyHg'] ?? ($container->privates['.security.expression.2VveyHg'] = new \Symfony\Component\ExpressionLanguage\Expression('!is_authenticated()')));

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), [0 => 'ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), [0 => $a], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), [0 => $a], NULL);

        return $instance;
    }
}
