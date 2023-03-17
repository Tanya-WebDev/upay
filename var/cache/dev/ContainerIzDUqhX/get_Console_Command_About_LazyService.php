<?php

namespace ContainerIzDUqhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_About_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.about.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.about.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('about', [], 'Display information about the current project', false, #[\Closure(name: 'console.command.about', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\AboutCommand {
            return ($container->privates['console.command.about'] ?? $container->load('getConsole_Command_AboutService'));
        });
    }
}
