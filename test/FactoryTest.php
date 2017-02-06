<?php

use PHPUnit\Framework\TestCase;
use Design\Pattern\Factory\Factory;
use Design\Pattern\Factory\Honda;
use Design\Pattern\Factory\Audi;

class FactoryTest extends TestCase
{
    public function testMakeDefault()
    {
        $factory = new Factory;
        $car = $factory->make();
        $this->assertInstanceOf(Honda::class, $car);
        $this->assertEquals('Honda runs', $car->drive());
    }

    public function testMake()
    {
        $factory = new Factory;
        $car = $factory->by('German')->make();
        $this->assertInstanceOf(Audi::class, $car);
        $this->assertEquals('Audi runs', $car->drive());
    }
}
