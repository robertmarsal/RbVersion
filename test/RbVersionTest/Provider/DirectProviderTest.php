<?php

namespace RbVersionTest\Controller;

use RbVersion\Model\Version as RbVersion;
use RbVersion\Provider\DirectProvider;
use PHPUnit_Framework_TestCase;

class DirectProviderTest extends PHPUnit_Framework_TestCase
{
    protected $currentVersion;
    protected $configMock;

    public function setUp()
    {
        $this->configMock = (object) array(
            'provider' => array(
                'type'   => 'direct',
                'number' => '1.2.3',
                'name'   => 'Amazing Antilope',
            ),
        );
    }

    public function testGetVersionObtainsTheCorrectVersion()
    {
        $testVersion = new RbVersion(
            $this->configMock->provider['number'],
            $this->configMock->provider['name']
        );

        $directProvider = new DirectProvider();

        $this->assertEquals(
            $testVersion,
            $directProvider->getVersion($this->configMock)
        );
    }
}