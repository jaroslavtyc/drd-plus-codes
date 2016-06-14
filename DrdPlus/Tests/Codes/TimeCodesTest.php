<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\TimeCodes;

class TimeCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedCodes = [
                'round',
                'minute',
                'hour',
                'day',
                'month',
                'year'
            ],
            TimeCodes::getTimeCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
