<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\AfflictionByWoundDomainCode;

class AfflictionByWoundDomainCodeTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = ['physical', 'psychical'],
            AfflictionByWoundDomainCode::getAfflictionDomainCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}