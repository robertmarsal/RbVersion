<?php

namespace RbVersion\Provider;

interface ProviderInterface
{
    public function getVersion($config);
}