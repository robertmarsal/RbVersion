<?php

namespace RbVersion\Model;

class Version
{
    /**
     * Returns the version number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Returns the version name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the version number.
     *
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Set the version name.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct($number, $name = '')
    {
        $this->number = $number;
        $this->name   = $name;
    }
}
