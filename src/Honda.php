<?php

namespace Design\Pattern\Factory;

class Honda extends Car
{
    public function drive(): string
    {
        return 'Honda runs';
    }
}
