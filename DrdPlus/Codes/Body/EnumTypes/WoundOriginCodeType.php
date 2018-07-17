<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\Body\EnumTypes;

use DrdPlus\Codes\Body\OrdinaryWoundOriginCode;
use DrdPlus\Codes\Body\SeriousWoundOriginCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;
use Granam\Tools\ValueDescriber;

class WoundOriginCodeType extends AbstractCodeType
{
    public const WOUND_ORIGIN_CODE = 'wound_origin_code';

    /**
     * @return bool
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function registerSelf(): bool
    {
        $registered = parent::registerSelf();
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        self::registerCodeAsSubTypeEnum(OrdinaryWoundOriginCode::class);
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        self::registerCodeAsSubTypeEnum(SeriousWoundOriginCode::class);

        return $registered;
    }

    /**
     * @param bool|float|int|string $enumValue
     * @return string
     * @throws \DrdPlus\Codes\Body\EnumTypes\Exceptions\ThereIsNoDefaultEnumForWoundOriginCode
     */
    protected static function getDefaultEnumClass($enumValue): string
    {
        throw new Exceptions\ThereIsNoDefaultEnumForWoundOriginCode(
            'Given code value ' . ValueDescriber::describe($enumValue)
            . ' do not match to any value from any of registered subtypes: '
            . OrdinaryWoundOriginCode::class . ' and ' . SeriousWoundOriginCode::class
        );
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::WOUND_ORIGIN_CODE;
    }

}