<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ArmorCodes;

class ArmorCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'without_armor',
                'padded_armor',
                'leather_armor',
                'hobnailed_armor',
                'chainmail_armor',
                'scale_armor',
                'plate_armor',
                'full_plate_armor',
                'without_helm',
                'leather_cap',
                'chainmail_hood',
                'conical_helm',
                'full_helm',
                'barrel_helm',
                'great_helm',
            ],
            ArmorCodes::getArmorCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_armor_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'without_armor',
                'padded_armor',
                'leather_armor',
                'hobnailed_armor',
                'chainmail_armor',
                'scale_armor',
                'plate_armor',
                'full_plate_armor',
            ],
            ArmorCodes::getBodyArmorCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_helm_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'without_helm',
                'leather_cap',
                'chainmail_hood',
                'conical_helm',
                'full_helm',
                'barrel_helm',
                'great_helm',
            ],
            ArmorCodes::getHelmCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
