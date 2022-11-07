<?php

use HassanElshazlyEida\UnitConversions\Weight;

it('can convert kg to lbs', function () {

    $lbs=Weight::fromKg(100)->toLbs();

    $this->assertEquals(220.4623, number_format($lbs, 4, '.', ''));

});
