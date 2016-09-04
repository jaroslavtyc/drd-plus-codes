<?php
namespace DrdPlus\Codes\Armaments;

interface ArmamentCode
{
    /**
     * @return bool
     */
    public function isProtectiveArmament();

    /**
     * @return bool
     */
    public function isWeaponlike();

}