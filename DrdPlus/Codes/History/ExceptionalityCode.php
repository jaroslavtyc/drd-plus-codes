<?php
namespace DrdPlus\Codes\History;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ExceptionalityCode getIt($codeValue)
 */
class ExceptionalityCode extends AbstractCode
{
    public const ANCESTRY = 'ancestry';
    public const POSSESSION = 'possession';
    public const SKILLS = 'skills';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [self::ANCESTRY, self::POSSESSION, self::SKILLS];
    }

}