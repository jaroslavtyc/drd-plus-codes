<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MovementTypeCode;

class MovementTypeCodeTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'walk',
                'rush',
                'run',
                'sprint'
            ],
            MovementTypeCode::getMovementTypCodes()
        );
    }
}