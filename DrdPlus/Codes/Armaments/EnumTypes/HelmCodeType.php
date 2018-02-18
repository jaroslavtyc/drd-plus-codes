<?php
namespace DrdPlus\Codes\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\HelmCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;

class HelmCodeType extends AbstractCodeType
{
    public const HELM_CODE = 'helm_code';

    public static function registerSelf(): bool
    {
        parent::registerSelf();

        return static::registerCode(HelmCode::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::HELM_CODE;
    }

}