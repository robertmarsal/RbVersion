<?php

namespace RbVersionTest\Mvc\Controller\Plugin;

use RbVersion\Mvc\Controller\Plugin\Version as RbVersionControllerPlugin;
use PHPUnit_Framework_TestCase;

class VersionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group helper
     */
    public function testSetAndGetServiceLocator()
    {
        $serviceLocatorMock = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface', array(
            'get', 'has',
        ));

        $rbVersion = new RbVersionControllerPlugin();

        $rbVersion->setServiceLocator($serviceLocatorMock);

        $this->assertEquals($serviceLocatorMock, $rbVersion->getServiceLocator());
    }
}
