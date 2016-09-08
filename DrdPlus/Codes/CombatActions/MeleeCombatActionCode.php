<?php
namespace DrdPlus\Codes\CombatActions;

/**
 * @method static MeleeCombatActionCode getIt($codeValue)
 */
class MeleeCombatActionCode extends CombatActionCode
{
    // See PPH page 107-109
    const HEADLESS_ATTACK = 'headless_attack';
    const COVER_OF_ALLY = 'cover_of_ally';
    const FIGHT_WITH_TWO_WEAPONS = 'fight_with_two_weapons';
    const FLAT_ATTACK = 'flat_attack';
    const PRESSURE = 'pressure';
    const RETREAT = 'retreat';
    const HANDOVER_ITEM = 'handover_item';

    /**
     * @return array|string[]
     */
    public static function getMeleeOnlyCombatActionCodes()
    {
        return [
            self::HEADLESS_ATTACK,
            self::COVER_OF_ALLY,
            self::FIGHT_WITH_TWO_WEAPONS,
            self::FLAT_ATTACK,
            self::PRESSURE,
            self::RETREAT,
            self::HANDOVER_ITEM,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getMeleeCombatActionCodes()
    {
        return array_merge(
            self::getCombatActionCodes(),
            self::getMeleeOnlyCombatActionCodes()
        );
    }

    /**
     * @return bool
     */
    public function isForMelee()
    {
        // any action represented by this code can be used for melee attack
        return true;
    }

    /**
     * @return bool
     */
    public function isForRanged()
    {
        // only actions inherited from generic combat actions can be used for ranged attack
        return !in_array($this->getValue(), self::getMeleeOnlyCombatActionCodes(), true);
    }
}