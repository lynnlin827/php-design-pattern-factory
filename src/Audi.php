<?php

namespace Design\Pattern\Factory;

class Audi extends Car
{
    public function drive(): string
    {
        return 'Audi runs';
    }
}
