<?php

namespace RbVersion\Provider;

use RbVersion\Provider\ProviderInterface;
use RbVersion\Exception\FileNotFoundException;

class FileProvider implements ProviderInterface
{
    public function getVersion($config)
    {
        if(!file_exists($config->provider['file'])) {
            throw new FileNotFoundException('The version file could not be found!');
        }

        return include $config->provider['file'];
    }
}
