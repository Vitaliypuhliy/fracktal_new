<?php

namespace IKTO\Fracktal\CoreBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class IktoFracktalCoreExtension extends Extension
{

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
//        @TODO Enable services loading when first service is registered
//        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
//        $loader->load('services.xml');
    }
}
