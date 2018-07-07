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
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $this->addAnnotatedClassesToCompile([
            AuthenticationSubscriber::class,
            ]);

        $container->setParameter('wcf_sessions_auth.database.entity_manager', $config['database']['entity_manager']);
        $container->setParameter('wcf_sessions_auth.database.table_prefix', $config['database']['table_prefix']);
        $container->setParameter('wcf_sessions_auth.session.cookie_prefix', $config['session']['cookie_prefix']);
        $container->setParameter('wcf_sessions_auth.session.login_page', $config['session']['login_page']);
        $container->setParameter('wcf_sessions_auth.session.target_page', $config['session']['target_page']);
        $container->setParameter('wcf_sessions_auth.session.ip_check', $config['session']['ip_check']);
        $container->setParameter('wcf_sessions_auth.session.force_login', $config['session']['force_login']);
        $container->setParameter('wcf_sessions_auth.roles', $config['roles']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
