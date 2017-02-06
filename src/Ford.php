<?php

namespace Design\Pattern\Factory;

class Ford extends Car
{
    public function drive(): string
    {
        return 'Ford runs';
    }
}
