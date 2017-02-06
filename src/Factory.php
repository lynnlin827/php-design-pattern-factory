<?php

namespace Design\Pattern\Factory;

class Factory
{
    private $country;

    public function by(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function make(): Car
    {
        switch ($this->country) {
            case 'German':
                return new Audi;
                break;

            case 'America':
                return new Ford;
                break;

            case 'Japan':
            default:
                return new Honda;
                break;
        }
    }
}
