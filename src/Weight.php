<?php

namespace HassanElshazlyEida\UnitConversions;

class Weight
{
    /**
     * @var float
     */
    private $kg;
    public static function fromKg(float $kg):self{
        return new static($kg);
    }

    public function __construct(float $kg)
    {
        $this->kg = $kg;
    }

    public function toLbs(): float
    {
        return $this->kg * 2.204623;
    }
}
