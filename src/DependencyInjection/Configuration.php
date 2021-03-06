<?php

namespace xanily\WCFSessionsAuthBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root('wcf_sessions_auth')
                ->children()
                    ->arrayNode('session')->isRequired()
                        ->children()
                            ->scalarNode('cookie_prefix')->defaultValue('wsc_')->end()
                            ->scalarNode('login_page')->defaultValue('/login')->cannotBeEmpty()->end()
                            ->scalarNode('target_page')->defaultValue('/')->end()
                            ->scalarNode('ip_check')->defaultValue(0)->end()
                            ->booleanNode('force_login')->defaultValue(true)->end()
                        ->end()
                    ->end()
                    ->arrayNode('database')
                        ->children()
                            ->scalarNode('entity_manager')->isRequired()->end()
                            ->scalarNode('table_prefix')->defaultValue('wcf1_')->end()
                        ->end()
                    ->end()
                    ->arrayNode('roles')
                        ->prototype('scalar')->end()
                    ->end()
                ->end()
        ;

        return $treeBuilder;
    }
}
