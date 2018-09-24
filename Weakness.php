<?php

class Weakness {
    var $energyType;
    var $multiplier;

    /**
     * Weakness constructor.
     * @param EnergyType    $_energyType
     * @param int           $_multiplier
     */
    function __construct(EnergyType $_energyType, int $_multiplier)
    {
        $this->energyType = $_energyType;
        $this->multiplier = $_multiplier;
    }
}