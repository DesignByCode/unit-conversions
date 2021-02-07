<?php


namespace Designbycode\UnitConversions\Tests;


use Designbycode\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{

    /** @test */
    public function can_convert_celsius_to_fahrenheit_static () {
        $temp = Temperature::fromCelsius(22)->toFahrenheit();
        $this->assertEquals(71.60000, $temp);
    }

    /** @test */
    public function can_convert_celsius_to_fahrenheit () {
        $temp = (new Temperature(22))->toFahrenheit();
        $this->assertEquals(71.60000, $temp);
    }


}
