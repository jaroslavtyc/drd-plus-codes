<?php
namespace DrdPlus\Codes;

class MovementTypeCodes
{
    const WALK = 'walk';
    const RUSH = 'rush';
    const RUN = 'run';
    const SPRINT = 'sprint';

    /**
     * @return array|string[]
     */
    public static function getMovementTypCodes()
    {
        return [
            self::WALK,
            self::RUSH,
            self::RUN,
            self::SPRINT,
        ];
    }
}