<?php

namespace RbVersionTest\Controller;

use RbVersion\Provider\FileProvider;
use PHPUnit_Framework_TestCase;

class FileProviderTest extends PHPUnit_Framework_TestCase
{
    protected $currentVersion;
    protected $configMock;

    public function setUp()
    {
        $testVersionFile = __DIR__ . '/_fixtures/version.php';

        $this->currentVersion = include $testVersionFile;

        $this->configMock = (object) array(
            'provider' => array(
                'file' => $testVersionFile,
            ),
        );
    }

    public function testGetVersionObtainsTheCorrectVersion()
    {
        $fileProvider = new FileProvider();

        $this->assertEquals(
            $this->currentVersion,
            $fileProvider->getVersion($this->configMock)
        );
    }
}