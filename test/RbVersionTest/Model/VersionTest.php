<?php

namespace RbVersionTest\Model;

use RbVersion\Model\Version as RbVersionModel;
use PHPUnit_Framework_TestCase;

class VersionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group model
     */
    public function testGetAndSetNumber()
    {
        $number = rand(1, 10) . '.' . rand(1, 10) . '.' . rand(1, 10);

        $rbVersionModel = new RbVersionModel();

        $rbVersionModel->setNumber($number);

        $this->assertEquals($number, $rbVersionModel->getNumber());
    }

    /**
     * @group model
     */
    public function testGetAndSetName()
    {
        $name = uniqid();

        $rbVersionModel = new RbVersionModel();

        $rbVersionModel->setName($name);

        $this->assertEquals($name, $rbVersionModel->getName());
    }
}