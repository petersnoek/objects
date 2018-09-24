<?php

class Pokemon
{
    public $name;       // Pokemon heeft een naam
    public $energyType; // Pokemon heeft een EnergyType (object)
    public $hitpoints;  // maximum health (als ie 100% gezond is)
    public $health;     // huidige health (wellicht beschadigd)
    public $attacks;    // array met alle attack objecten
    public $weakness;
    public $resistance;

    /**
     * Pokemon constructor.
     * @param string        $strName
     * @param EnergyType    $objEnergyType
     * @param int           $intHitpoints
     * @param array[Attack] $arrAttacks
     * @param Weakness      $objWeakness
     * @param Resistance    $objResistance
     */
    public function __construct(string $strName, EnergyType $objEnergyType, int $intHitpoints, array $arrAttacks, Weakness $objWeakness, Resistance $objResistance)
    {
        $this->name = $strName;
        $this->energyType = $objEnergyType;
        $this->hitpoints = $intHitpoints;
        $this->health = $this->hitpoints;   // huidige gezondheid = max gezondheid
        $this->attacks = $arrAttacks;
        $this->weakness = $objWeakness;
        $this->resistance = $objResistance;
    }

    public function __toString()
    {
        return json_encode($this);
    }

    public function Attack($target)
    {
        echo "Pokemon->Attack(target): " . $this->name . " attacks " . $target->name . "<br>";
        $target->DoDamage($this->energyType, $this->damage);
    }

    public function DoDamage($_energyType, $_amount)
    {
        echo "Pokemon: " . $this->name . " receives " . $_energyType . " damage for " . $_amount . " points." . "<br>";
    }
}