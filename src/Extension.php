<?php

namespace Rezzza\Tk1;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

use Behat\Behat\Extension\ExtensionInterface;

class Extension implements ExtensionInterface
{
    /**
     * @param array            $config    Extension configuration hash (from behat.yml)
     * @param ContainerBuilder $container ContainerBuilder instance
     *
     * @return null
     */
    public function load(array $config, ContainerBuilder $container)
    {
    }

    /**
     * @param ArrayNodeDefinition $builder
     *
     * @return null
     */
    public function getConfig(ArrayNodeDefinition $builder)
    {
    }

    /**
     * @return array
     */
    public function getCompilerPasses()
    {
    }
}

