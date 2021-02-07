<?php


namespace Designbycode\UnitConversions;


class Temperature
{
    private float $celsius;

    /**
     * Temperature constructor.
     * @param float $celsius
     */
    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    /**
     * @return static
     */
    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    /**
     * Converts Celsius to Fahrenheit
     * @return float
     */
    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }


}
