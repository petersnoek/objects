<?php

class Attack {
    var $name;
    var $damage;

    /**
     * Attack constructor.
     * @param string    $strName
     * @param int       $intDamage
     */
    function __construct($strName, $intDamage)
    {
        $this->damage = $intDamage;
        $this->name = $strName;
    }
}