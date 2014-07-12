<?php

namespace RbVersion\Provider;

use RbVersion\Provider\ProviderInterface;
use RbVersion\Exception\FileNotFoundException;

class FileProvider implements ProviderInterface
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
        if(!file_exists($config->provider['file'])) {
            throw new FileNotFoundException('The version file could not be found!');
        }

        return include $config->provider['file'];
    }
}
