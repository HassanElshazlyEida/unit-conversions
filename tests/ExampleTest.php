<?php

use HassanElshazlyEida\UnitConversions\Temperature\Temperature;
use HassanElshazlyEida\UnitConversions\Weight;

it('can convert kg to lbs', function () {
    $lbs = Weight::fromKg(100)->toLbs();

    $this->assertEquals(220.4623, number_format($lbs, 4, '.', ''));
});
it('can convert celsius to fahrenheit', function () {
    $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();

    $this->assertEquals(212, $fahrenheit);
});
