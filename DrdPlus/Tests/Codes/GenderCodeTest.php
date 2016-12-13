<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\GenderCode;

class GenderCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_ask_it_if_is_male_or_female()
    {
        $female = GenderCode::getIt(GenderCode::FEMALE);
        self::assertTrue($female->isFemale());
        self::assertFalse($female->isMale());
        $male = GenderCode::getIt(GenderCode::MALE);
        self::assertTrue($male->isMale());
        self::assertFalse($male->isFemale());
    }
}