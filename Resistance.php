<?php

class Resistance{
    var $energyType;
    var $value;

    function __construct($objEnergyType, $intValue)
    {
        $this->energyType = $objEnergyType;
        $this->value = $intValue;
    }
}