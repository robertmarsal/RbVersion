<?php

namespace RbVersion\View\Helper;

use RbVersion\Exception\ProviderTypeNotSetException;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

class Version extends AbstractHelper implements ServiceLocatorAwareInterface
{
    private $serviceLocator;

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
        return $this;
    }

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    protected function getConfig()
    {
        $sm = $this->getServiceLocator()->getServiceLocator();
        $config = $sm->get('application')->getConfig();

        return (object) $config['rb_version'];
    }

    public function __invoke()
    {
        $config = $this->getConfig();

        if(!isset($config->provider['type'])) {
            throw new ProviderTypeNotSetException('The provider type is not set!');
        }

        $providerClass = '\RbVersion\Provider\\' . ucfirst($config->provider['type']) . 'Provider';
        $provider = new $providerClass();

        return $provider->getVersion($config);
    }
}