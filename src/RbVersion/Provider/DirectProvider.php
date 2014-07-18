<?php

namespace RbVersion\Provider;

use RbVersion\Model\Version as RbVersion;
use RbVersion\Provider\ProviderInterface;
use RbVersion\Exception\FileNotFoundException;

class DirectProvider implements ProviderInterface
{
    /**
     * Returns the version in string format.
     *
     * @param object $config
     * @return string
     * @throws FileNotFoundException
     */
    public function getVersion($config)
    {
        if(!isset($config->provider['number']) || !isset($config->provider['name'])) {
            throw new DirectConfigurationMissingException('The number or name keys are missing!');
        }

        return new RbVersion($config->provider['number'], $config->provider['name']);
    }
}
