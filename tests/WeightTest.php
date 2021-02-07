<?php

namespace Designbycode\UnitConversions\Tests;

use Designbycode\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs_static()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = (new Weight(100))->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
