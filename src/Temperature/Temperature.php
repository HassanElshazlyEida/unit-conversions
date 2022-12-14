<?php

namespace HassanElshazlyEida\UnitConversions\Temperature;

class Temperature
{
    private float $celsius;

    public static function forCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit()
    {
        return ($this->celsius * 1.8) + 32;
    }
}
