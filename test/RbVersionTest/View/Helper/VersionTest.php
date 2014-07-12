<?php

namespace RbVersionTest\Controller;

use RbVersion\View\Helper\Version as AppVersion;
use PHPUnit_Framework_TestCase;

class RbVersionTest extends PHPUnit_Framework_TestCase
{
    public function testSetAndGetServiceLocator()
    {
        $serviceLocatorMock = $this->getMock(
            'Zend\ServiceManager\ServiceLocatorInterface',
            array(),
            array(),
            'ServiceLocatorInterface'
        );

        $versionViewHelper = new AppVersion();
        $versionViewHelper->setServiceLocator($serviceLocatorMock);

        $this->assertEquals(
            $serviceLocatorMock,
            $versionViewHelper->getServiceLocator()
        );
    }
}