<?php

namespace xanily\WCFSessionsAuthBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use xanily\WCFSessionsAuthBundle\Subscriber\AuthenticationSubscriber;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class WCFSessionsAuthExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $this->addAnnotatedClassesToCompile([
            AuthenticationSubscriber::class,
            ]);

        $container->setParameter('wcf_sessions_auth.session.cookie_prefix', $config['session']['cookie_prefix']);
        $container->setParameter('wcf_sessions_auth.session.login_page', $config['session']['login_page']);
        $container->setParameter('wcf_sessions_auth.session.default_success_route', $config['session']['default_success_route']);
        $container->setParameter('wcf_sessions_auth.database.entity_manager', $config['database']['entity_manager']);
        $container->setParameter('wcf_sessions_auth.database.table_prefix', $config['database']['table_prefix']);
        $container->setParameter('wcf_sessions_auth.roles', $config['roles']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
