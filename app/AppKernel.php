<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{

    protected $varDir;

    public function __construct($environment, $debug)
    {
        parent::__construct($environment, $debug);

        $this->varDir = __DIR__.'/../var';
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        return $this->varDir . '/cache/' . $this->environment;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        return $this->varDir . '/logs';
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = [
          new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
          new Symfony\Bundle\SecurityBundle\SecurityBundle(),
          new Symfony\Bundle\TwigBundle\TwigBundle(),
          new Symfony\Bundle\MonologBundle\MonologBundle(),
          new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
          new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
          new IKTO\Fracktal\CoreBundle\IktoFracktalCoreBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
        }

        return $bundles;
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(
          $this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml'
        );
    }
}
